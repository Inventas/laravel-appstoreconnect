<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploads;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildUploads_buildUploadFiles_getToManyRelationship
 */
class BuildUploadsBuildUploadFilesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildUploads/{$this->id}/relationships/buildUploadFiles";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
