<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersions_getInstance
 */
class BackgroundAssetVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $fieldsbackgroundAssets
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionInternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionExternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionAppStoreReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetUploadFiles
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionInternalBetaReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionExternalBetaReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionAppStoreReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetUploadFiles = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'fields[backgroundAssets]' => $this->fieldsbackgroundAssets,
            'fields[backgroundAssetVersionInternalBetaReleases]' => $this->fieldsbackgroundAssetVersionInternalBetaReleases,
            'fields[backgroundAssetVersionExternalBetaReleases]' => $this->fieldsbackgroundAssetVersionExternalBetaReleases,
            'fields[backgroundAssetVersionAppStoreReleases]' => $this->fieldsbackgroundAssetVersionAppStoreReleases,
            'fields[backgroundAssetUploadFiles]' => $this->fieldsbackgroundAssetUploadFiles,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
