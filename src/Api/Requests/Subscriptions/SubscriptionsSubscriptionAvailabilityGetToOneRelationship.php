<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_subscriptionAvailability_getToOneRelationship
 */
class SubscriptionsSubscriptionAvailabilityGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/subscriptionAvailability";
    }

    public function __construct(
        protected string $id,
    ) {}
}
