<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_deleteInstance
 */
class ProfilesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
