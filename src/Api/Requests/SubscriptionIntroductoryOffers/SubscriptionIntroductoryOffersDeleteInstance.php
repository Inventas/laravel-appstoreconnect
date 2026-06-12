<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionIntroductoryOffers_deleteInstance
 */
class SubscriptionIntroductoryOffersDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionIntroductoryOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
