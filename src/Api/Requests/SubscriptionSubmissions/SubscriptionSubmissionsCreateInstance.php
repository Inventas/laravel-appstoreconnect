<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionSubmissions_createInstance
 */
class SubscriptionSubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionSubmissions';
    }

    public function __construct(
        protected SubscriptionSubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
