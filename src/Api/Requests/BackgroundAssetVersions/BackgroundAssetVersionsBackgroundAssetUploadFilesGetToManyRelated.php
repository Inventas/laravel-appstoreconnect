<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersions_backgroundAssetUploadFiles_getToManyRelated
 */
class BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersions/{$this->id}/backgroundAssetUploadFiles";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetUploadFiles
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetUploadFiles = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[backgroundAssetUploadFiles]' => $this->fieldsbackgroundAssetUploadFiles, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
