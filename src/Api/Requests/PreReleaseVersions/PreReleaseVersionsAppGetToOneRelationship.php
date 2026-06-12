<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * preReleaseVersions_app_getToOneRelationship
 */
class PreReleaseVersionsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/preReleaseVersions/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
