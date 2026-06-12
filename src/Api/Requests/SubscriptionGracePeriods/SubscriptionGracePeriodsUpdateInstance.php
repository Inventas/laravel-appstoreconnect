<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGracePeriods;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGracePeriodUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionGracePeriods_updateInstance
 */
class SubscriptionGracePeriodsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGracePeriods/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionGracePeriodUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
