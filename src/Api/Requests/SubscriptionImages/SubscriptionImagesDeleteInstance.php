<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionImages_deleteInstance
 */
class SubscriptionImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
