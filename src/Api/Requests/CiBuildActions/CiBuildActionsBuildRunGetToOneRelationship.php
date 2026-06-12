<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_buildRun_getToOneRelationship
 */
class CiBuildActionsBuildRunGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/relationships/buildRun";
    }

    public function __construct(
        protected string $id,
    ) {}
}
