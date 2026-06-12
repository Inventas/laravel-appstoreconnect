<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_deleteInstance
 */
class UsersDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
