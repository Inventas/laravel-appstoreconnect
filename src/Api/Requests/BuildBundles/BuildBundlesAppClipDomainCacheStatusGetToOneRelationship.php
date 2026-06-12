<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBundles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBundles_appClipDomainCacheStatus_getToOneRelationship
 */
class BuildBundlesAppClipDomainCacheStatusGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBundles/{$this->id}/relationships/appClipDomainCacheStatus";
    }

    public function __construct(
        protected string $id,
    ) {}
}
