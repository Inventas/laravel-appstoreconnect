<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploadFiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildUploadFiles_getInstance
 */
class BuildUploadFilesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildUploadFiles/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploadFiles = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[buildUploadFiles]' => $this->fieldsbuildUploadFiles], static fn (mixed $value): bool => $value !== null);
    }
}
