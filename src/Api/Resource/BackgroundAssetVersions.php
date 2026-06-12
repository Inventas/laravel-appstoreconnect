<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions\BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions\BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions\BackgroundAssetVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions\BackgroundAssetVersionsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssetVersions extends BaseResource
{
    public function backgroundAssetVersionsCreateInstance(
        BackgroundAssetVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionsCreateInstance($payload));
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
    public function backgroundAssetVersionsGetInstance(
        string $id,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $fieldsbackgroundAssets = null,
        ?array $fieldsbackgroundAssetVersionInternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersionExternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersionAppStoreReleases = null,
        ?array $fieldsbackgroundAssetUploadFiles = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionsGetInstance($id, $fieldsbackgroundAssetVersions, $fieldsbackgroundAssets, $fieldsbackgroundAssetVersionInternalBetaReleases, $fieldsbackgroundAssetVersionExternalBetaReleases, $fieldsbackgroundAssetVersionAppStoreReleases, $fieldsbackgroundAssetUploadFiles, $include));
    }

    public function backgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetUploadFiles
     */
    public function backgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelated(
        string $id,
        ?array $fieldsbackgroundAssetUploadFiles = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionsBackgroundAssetUploadFilesGetToManyRelated($id, $fieldsbackgroundAssetUploadFiles, $limit));
    }
}
