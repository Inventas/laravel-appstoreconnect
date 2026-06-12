<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPromotionalOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPromotionalOffers_updateInstance
 */
class SubscriptionPromotionalOffersUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPromotionalOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionPromotionalOfferUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
