<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPromotionalOffers_deleteInstance
 */
class SubscriptionPromotionalOffersDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPromotionalOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
