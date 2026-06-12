<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\UserInvitations;

use Inventas\AppStoreConnectKit\Api\Dto\UserInvitationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * userInvitations_createInstance
 */
class UserInvitationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/userInvitations';
    }

    public function __construct(
        protected UserInvitationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
