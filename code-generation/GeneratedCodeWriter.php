<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration;

use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Data\TaggedOutputFile;
use Illuminate\Support\Arr;
use Nette\PhpGenerator\PhpFile;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class GeneratedCodeWriter
{
    public function __construct(
        private readonly string $rootPath,
        private readonly string $outputPath,
        private readonly string $namespace,
    ) {}

    public function cleanOutput(): void
    {
        $path = $this->absoluteOutputPath();

        if (! is_dir($path)) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST,
        );

        /** @var SplFileInfo $file */
        foreach ($iterator as $file) {
            $file->isDir() ? rmdir($file->getPathname()) : unlink($file->getPathname());
        }

        rmdir($path);
    }

    /**
     * @return list<string>
     */
    public function list(GeneratedCode $generatedCode): array
    {
        return array_values(array_map(
            fn (PhpFile|TaggedOutputFile $file): string => $this->relativePathFor($file),
            $this->files($generatedCode),
        ));
    }

    public function write(GeneratedCode $generatedCode): void
    {
        foreach ($this->files($generatedCode) as $file) {
            $path = $this->rootPath.'/'.$this->relativePathFor($file);

            if (! is_dir(dirname($path))) {
                mkdir(dirname($path), recursive: true);
            }

            file_put_contents($path, (string) ($file instanceof TaggedOutputFile ? $file->file : $file));
        }
    }

    /**
     * @return list<PhpFile|TaggedOutputFile>
     */
    private function files(GeneratedCode $generatedCode): array
    {
        return array_values(array_filter([
            $generatedCode->connectorClass,
            ...$generatedCode->resourceClasses,
            ...$generatedCode->requestClasses,
            ...$generatedCode->dtoClasses,
            ...$generatedCode->additionalFiles,
        ]));
    }

    private function relativePathFor(PhpFile|TaggedOutputFile $file): string
    {
        if ($file instanceof TaggedOutputFile) {
            return "{$this->outputPath}/{$file->path}";
        }

        $namespace = Arr::first($file->getNamespaces())->getName();
        $class = Arr::first($file->getClasses())?->getName();
        $relativeNamespace = trim(str_replace($this->namespace, '', $namespace), '\\');
        $relativePath = str_replace('\\', '/', $relativeNamespace);

        return $relativePath === ''
            ? "{$this->outputPath}/{$class}.php"
            : "{$this->outputPath}/{$relativePath}/{$class}.php";
    }

    private function absoluteOutputPath(): string
    {
        return $this->rootPath.'/'.$this->outputPath;
    }
}
