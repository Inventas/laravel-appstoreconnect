<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionGroups_createInstance
 */
class SubscriptionGroupsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionGroups';
    }

    public function __construct(
        protected SubscriptionGroupCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
