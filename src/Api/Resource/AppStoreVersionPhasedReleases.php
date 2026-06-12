<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPhasedReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPhasedReleaseUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases\AppStoreVersionPhasedReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases\AppStoreVersionPhasedReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases\AppStoreVersionPhasedReleasesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionPhasedReleases extends BaseResource
{
    public function appStoreVersionPhasedReleasesCreateInstance(
        AppStoreVersionPhasedReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionPhasedReleasesCreateInstance($payload));
    }

    public function appStoreVersionPhasedReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionPhasedReleasesDeleteInstance($id));
    }

    public function appStoreVersionPhasedReleasesUpdateInstance(
        string $id,
        AppStoreVersionPhasedReleaseUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionPhasedReleasesUpdateInstance($id, $payload));
    }
}
