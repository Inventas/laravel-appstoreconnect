<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionGroupLocalizations_createInstance
 */
class SubscriptionGroupLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionGroupLocalizations';
    }

    public function __construct(
        protected SubscriptionGroupLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
