<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionImages_updateInstance
 */
class SubscriptionImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
