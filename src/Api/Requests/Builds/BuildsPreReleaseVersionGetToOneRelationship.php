<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_preReleaseVersion_getToOneRelationship
 */
class BuildsPreReleaseVersionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/preReleaseVersion";
    }

    public function __construct(
        protected string $id,
    ) {}
}
