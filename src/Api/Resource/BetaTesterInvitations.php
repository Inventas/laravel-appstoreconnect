<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterInvitationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesterInvitations\BetaTesterInvitationsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaTesterInvitations extends BaseResource
{
    public function betaTesterInvitationsCreateInstance(
        BetaTesterInvitationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTesterInvitationsCreateInstance($payload));
    }
}
