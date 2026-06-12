<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionReleaseRequestCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionReleaseRequests\AppStoreVersionReleaseRequestsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionReleaseRequests extends BaseResource
{
    public function appStoreVersionReleaseRequestsCreateInstance(
        AppStoreVersionReleaseRequestCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionReleaseRequestsCreateInstance($payload));
    }
}
