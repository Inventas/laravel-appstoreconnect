<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * androidToIosAppMappingDetails_deleteInstance
 */
class AndroidToIosAppMappingDetailsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/androidToIosAppMappingDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
