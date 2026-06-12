<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_deleteInstance
 */
class BundleIdsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
