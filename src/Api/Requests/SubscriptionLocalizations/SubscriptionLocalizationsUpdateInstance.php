<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionLocalizations_updateInstance
 */
class SubscriptionLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
