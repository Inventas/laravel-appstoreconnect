<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_appStoreVersion_getToOneRelationship
 */
class BuildsAppStoreVersionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/appStoreVersion";
    }

    public function __construct(
        protected string $id,
    ) {}
}
