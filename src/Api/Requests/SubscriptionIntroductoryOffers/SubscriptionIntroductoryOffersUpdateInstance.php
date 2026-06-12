<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionIntroductoryOffers_updateInstance
 */
class SubscriptionIntroductoryOffersUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionIntroductoryOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionIntroductoryOfferUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
