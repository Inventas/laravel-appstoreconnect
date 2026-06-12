<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIdCapabilities_deleteInstance
 */
class BundleIdCapabilitiesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIdCapabilities/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
