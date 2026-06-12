<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * routingAppCoverages_deleteInstance
 */
class RoutingAppCoveragesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/routingAppCoverages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
