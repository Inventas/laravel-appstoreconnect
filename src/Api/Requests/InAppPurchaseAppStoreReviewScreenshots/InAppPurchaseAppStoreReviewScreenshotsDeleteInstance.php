<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseAppStoreReviewScreenshots_deleteInstance
 */
class InAppPurchaseAppStoreReviewScreenshotsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseAppStoreReviewScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
