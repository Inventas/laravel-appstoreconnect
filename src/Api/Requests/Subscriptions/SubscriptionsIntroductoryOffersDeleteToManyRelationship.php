<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOffersLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptions_introductoryOffers_deleteToManyRelationship
 */
class SubscriptionsIntroductoryOffersDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/introductoryOffers";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionIntroductoryOffersLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
