<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_app_getToOneRelationship
 */
class BuildsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
