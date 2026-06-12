<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\UserInvitations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * userInvitations_deleteInstance
 */
class UserInvitationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/userInvitations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
