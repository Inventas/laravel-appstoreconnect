<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_appStoreReviewScreenshot_getToOneRelationship
 */
class SubscriptionsAppStoreReviewScreenshotGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/appStoreReviewScreenshot";
    }

    public function __construct(
        protected string $id,
    ) {}
}
