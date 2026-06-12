<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeOneTimeUseCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionOfferCodeOneTimeUseCodes_updateInstance
 */
class SubscriptionOfferCodeOneTimeUseCodesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodeOneTimeUseCodes/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionOfferCodeOneTimeUseCodeUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
