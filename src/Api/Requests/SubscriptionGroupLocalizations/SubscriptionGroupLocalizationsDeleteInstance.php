<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGroupLocalizations_deleteInstance
 */
class SubscriptionGroupLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGroupLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
