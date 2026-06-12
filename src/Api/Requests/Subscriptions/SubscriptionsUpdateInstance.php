<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptions_updateInstance
 */
class SubscriptionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
