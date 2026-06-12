<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionOfferCodes_updateInstance
 */
class SubscriptionOfferCodesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodes/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionOfferCodeUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
