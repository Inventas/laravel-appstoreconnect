<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupSubmissions\SubscriptionGroupSubmissionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionGroupSubmissions extends BaseResource
{
    public function subscriptionGroupSubmissionsCreateInstance(
        SubscriptionGroupSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGroupSubmissionsCreateInstance($payload));
    }
}
