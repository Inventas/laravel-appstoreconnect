<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesterInvitations;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterInvitationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaTesterInvitations_createInstance
 */
class BetaTesterInvitationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaTesterInvitations';
    }

    public function __construct(
        protected BetaTesterInvitationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
