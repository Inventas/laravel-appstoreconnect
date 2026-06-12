<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionAppStoreReviewScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionAppStoreReviewScreenshots_createInstance
 */
class SubscriptionAppStoreReviewScreenshotsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionAppStoreReviewScreenshots';
    }

    public function __construct(
        protected SubscriptionAppStoreReviewScreenshotCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
