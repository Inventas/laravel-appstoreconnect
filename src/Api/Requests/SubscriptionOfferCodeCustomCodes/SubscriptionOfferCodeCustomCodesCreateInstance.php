<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeCustomCodes;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeCustomCodeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionOfferCodeCustomCodes_createInstance
 */
class SubscriptionOfferCodeCustomCodesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionOfferCodeCustomCodes';
    }

    public function __construct(
        protected SubscriptionOfferCodeCustomCodeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
