<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAppStoreReviewScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseAppStoreReviewScreenshots_updateInstance
 */
class InAppPurchaseAppStoreReviewScreenshotsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseAppStoreReviewScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseAppStoreReviewScreenshotUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
