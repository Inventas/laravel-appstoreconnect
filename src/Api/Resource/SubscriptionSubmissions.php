<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionSubmissions\SubscriptionSubmissionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionSubmissions extends BaseResource
{
    public function subscriptionSubmissionsCreateInstance(
        SubscriptionSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionSubmissionsCreateInstance($payload));
    }
}
