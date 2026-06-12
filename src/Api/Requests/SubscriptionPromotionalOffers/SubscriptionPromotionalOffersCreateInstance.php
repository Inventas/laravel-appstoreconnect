<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPromotionalOfferCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPromotionalOffers_createInstance
 */
class SubscriptionPromotionalOffersCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionPromotionalOffers';
    }

    public function __construct(
        protected SubscriptionPromotionalOfferCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
