<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBetaDetails_build_getToOneRelationship
 */
class BuildBetaDetailsBuildGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBetaDetails/{$this->id}/relationships/build";
    }

    public function __construct(
        protected string $id,
    ) {}
}
