<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseSubmissions\InAppPurchaseSubmissionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseSubmissions extends BaseResource
{
    public function inAppPurchaseSubmissionsCreateInstance(
        InAppPurchaseSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseSubmissionsCreateInstance($payload));
    }
}
