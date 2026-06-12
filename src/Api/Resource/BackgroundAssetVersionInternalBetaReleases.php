<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionInternalBetaReleases\BackgroundAssetVersionInternalBetaReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssetVersionInternalBetaReleases extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionInternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function backgroundAssetVersionInternalBetaReleasesGetInstance(
        string $id,
        ?array $fieldsbackgroundAssetVersionInternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionInternalBetaReleasesGetInstance($id, $fieldsbackgroundAssetVersionInternalBetaReleases, $fieldsbackgroundAssetVersions, $include));
    }
}
