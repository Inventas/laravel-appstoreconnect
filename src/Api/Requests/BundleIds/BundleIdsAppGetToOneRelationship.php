<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_app_getToOneRelationship
 */
class BundleIdsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
