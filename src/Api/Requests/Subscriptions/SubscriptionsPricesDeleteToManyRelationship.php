<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPricesLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptions_prices_deleteToManyRelationship
 */
class SubscriptionsPricesDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/prices";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionPricesLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
