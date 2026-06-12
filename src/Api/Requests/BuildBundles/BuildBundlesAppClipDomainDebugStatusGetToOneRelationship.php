<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBundles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBundles_appClipDomainDebugStatus_getToOneRelationship
 */
class BuildBundlesAppClipDomainDebugStatusGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBundles/{$this->id}/relationships/appClipDomainDebugStatus";
    }

    public function __construct(
        protected string $id,
    ) {}
}
