<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionLocalizations_deleteInstance
 */
class SubscriptionLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
