<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPrices;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPriceCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPrices_createInstance
 */
class SubscriptionPricesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionPrices';
    }

    public function __construct(
        protected SubscriptionPriceCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
