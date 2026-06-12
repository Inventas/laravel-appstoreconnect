<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploads;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildUploads_deleteInstance
 */
class BuildUploadsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/buildUploads/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
