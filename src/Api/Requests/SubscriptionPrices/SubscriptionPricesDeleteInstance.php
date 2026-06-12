<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPrices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPrices_deleteInstance
 */
class SubscriptionPricesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPrices/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
