<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionAppStoreReleases\BackgroundAssetVersionAppStoreReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssetVersionAppStoreReleases extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionAppStoreReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function backgroundAssetVersionAppStoreReleasesGetInstance(
        string $id,
        ?array $fieldsbackgroundAssetVersionAppStoreReleases = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionAppStoreReleasesGetInstance($id, $fieldsbackgroundAssetVersionAppStoreReleases, $fieldsbackgroundAssetVersions, $include));
    }
}
