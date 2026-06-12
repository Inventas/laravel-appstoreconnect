<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploads;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildUploads_getInstance
 */
class BuildUploadsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildUploads/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploads = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploadFiles = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[buildUploads]' => $this->fieldsbuildUploads,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[buildUploadFiles]' => $this->fieldsbuildUploadFiles,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
