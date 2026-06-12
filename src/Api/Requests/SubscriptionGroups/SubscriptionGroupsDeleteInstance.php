<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGroups_deleteInstance
 */
class SubscriptionGroupsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGroups/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
