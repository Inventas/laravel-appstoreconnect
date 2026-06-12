<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssets_versions_getToManyRelated
 */
class BackgroundAssetsVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssets/{$this->id}/versions";
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $filterplatforms
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterinternalBetaReleaseState
     * @param  array<int, string>|null  $filterexternalBetaReleaseState
     * @param  array<int, string>|null  $filterappStoreReleaseState
     * @param  array<int, string>|null  $sort
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
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $filterplatforms = null,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $filterversion = null,
        /** @var array<int, string>|null */
        protected ?array $filterinternalBetaReleaseState = null,
        /** @var array<int, string>|null */
        protected ?array $filterexternalBetaReleaseState = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreReleaseState = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
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
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[locale]' => $this->filterlocale,
            'filter[platforms]' => $this->filterplatforms,
            'filter[state]' => $this->filterstate,
            'filter[version]' => $this->filterversion,
            'filter[internalBetaRelease.state]' => $this->filterinternalBetaReleaseState,
            'filter[externalBetaRelease.state]' => $this->filterexternalBetaReleaseState,
            'filter[appStoreRelease.state]' => $this->filterappStoreReleaseState,
            'sort' => $this->sort,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'fields[backgroundAssets]' => $this->fieldsbackgroundAssets,
            'fields[backgroundAssetVersionInternalBetaReleases]' => $this->fieldsbackgroundAssetVersionInternalBetaReleases,
            'fields[backgroundAssetVersionExternalBetaReleases]' => $this->fieldsbackgroundAssetVersionExternalBetaReleases,
            'fields[backgroundAssetVersionAppStoreReleases]' => $this->fieldsbackgroundAssetVersionAppStoreReleases,
            'fields[backgroundAssetUploadFiles]' => $this->fieldsbackgroundAssetUploadFiles,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
