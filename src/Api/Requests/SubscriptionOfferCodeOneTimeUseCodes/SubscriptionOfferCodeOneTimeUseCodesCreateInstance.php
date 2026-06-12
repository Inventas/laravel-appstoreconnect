<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeOneTimeUseCodeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionOfferCodeOneTimeUseCodes_createInstance
 */
class SubscriptionOfferCodeOneTimeUseCodesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionOfferCodeOneTimeUseCodes';
    }

    public function __construct(
        protected SubscriptionOfferCodeOneTimeUseCodeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
