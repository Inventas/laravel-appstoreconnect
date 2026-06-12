<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionGroupSubmissions_createInstance
 */
class SubscriptionGroupSubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionGroupSubmissions';
    }

    public function __construct(
        protected SubscriptionGroupSubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
