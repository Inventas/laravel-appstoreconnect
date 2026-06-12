<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets\BackgroundAssetsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets\BackgroundAssetsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets\BackgroundAssetsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets\BackgroundAssetsVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets\BackgroundAssetsVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssets extends BaseResource
{
    public function backgroundAssetsCreateInstance(
        BackgroundAssetCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BackgroundAssetsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssets
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function backgroundAssetsGetInstance(
        string $id,
        ?array $fieldsbackgroundAssets = null,
        ?array $fieldsapps = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetsGetInstance($id, $fieldsbackgroundAssets, $fieldsapps, $fieldsbackgroundAssetVersions, $include));
    }

    public function backgroundAssetsUpdateInstance(
        string $id,
        BackgroundAssetUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BackgroundAssetsUpdateInstance($id, $payload));
    }

    public function backgroundAssetsVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BackgroundAssetsVersionsGetToManyRelationship($id, $limit));
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
    public function backgroundAssetsVersionsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $filterplatforms = null,
        ?array $filterstate = null,
        ?array $filterversion = null,
        ?array $filterinternalBetaReleaseState = null,
        ?array $filterexternalBetaReleaseState = null,
        ?array $filterappStoreReleaseState = null,
        ?array $sort = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $fieldsbackgroundAssets = null,
        ?array $fieldsbackgroundAssetVersionInternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersionExternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersionAppStoreReleases = null,
        ?array $fieldsbackgroundAssetUploadFiles = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetsVersionsGetToManyRelated($id, $filterlocale, $filterplatforms, $filterstate, $filterversion, $filterinternalBetaReleaseState, $filterexternalBetaReleaseState, $filterappStoreReleaseState, $sort, $fieldsbackgroundAssetVersions, $fieldsbackgroundAssets, $fieldsbackgroundAssetVersionInternalBetaReleases, $fieldsbackgroundAssetVersionExternalBetaReleases, $fieldsbackgroundAssetVersionAppStoreReleases, $fieldsbackgroundAssetUploadFiles, $limit, $include));
    }
}
