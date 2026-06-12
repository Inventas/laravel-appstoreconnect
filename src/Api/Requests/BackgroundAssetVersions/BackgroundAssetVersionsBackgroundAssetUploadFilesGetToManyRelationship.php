<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersions_backgroundAssetUploadFiles_getToManyRelationship
 */
class BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersions/{$this->id}/relationships/backgroundAssetUploadFiles";
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
