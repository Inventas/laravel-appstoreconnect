<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionAppStoreReviewScreenshots_deleteInstance
 */
class SubscriptionAppStoreReviewScreenshotsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionAppStoreReviewScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
