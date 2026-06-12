<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionExternalBetaReleases\BackgroundAssetVersionExternalBetaReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssetVersionExternalBetaReleases extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionExternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function backgroundAssetVersionExternalBetaReleasesGetInstance(
        string $id,
        ?array $fieldsbackgroundAssetVersionExternalBetaReleases = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetVersionExternalBetaReleasesGetInstance($id, $fieldsbackgroundAssetVersionExternalBetaReleases, $fieldsbackgroundAssetVersions, $include));
    }
}
