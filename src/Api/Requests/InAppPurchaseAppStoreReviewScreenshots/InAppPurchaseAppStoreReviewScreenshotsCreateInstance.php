<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAppStoreReviewScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseAppStoreReviewScreenshots_createInstance
 */
class InAppPurchaseAppStoreReviewScreenshotsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseAppStoreReviewScreenshots';
    }

    public function __construct(
        protected InAppPurchaseAppStoreReviewScreenshotCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
