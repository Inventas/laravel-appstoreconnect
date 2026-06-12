<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploads;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildUploads_buildUploadFiles_getToManyRelated
 */
class BuildUploadsBuildUploadFilesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildUploads/{$this->id}/buildUploadFiles";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploadFiles = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[buildUploadFiles]' => $this->fieldsbuildUploadFiles, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
