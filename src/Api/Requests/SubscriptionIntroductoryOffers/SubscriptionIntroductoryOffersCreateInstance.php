<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOfferCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionIntroductoryOffers_createInstance
 */
class SubscriptionIntroductoryOffersCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionIntroductoryOffers';
    }

    public function __construct(
        protected SubscriptionIntroductoryOfferCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
