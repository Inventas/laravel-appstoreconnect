<?php

namespace Inventas\AppStoreConnectKit\Connect;

use Inventas\AppStoreConnectKit\JWT\TokenGenerator;
use Saloon\Contracts\Authenticator;
use Saloon\Contracts\PendingRequest;

class ConnectAuthenticator implements Authenticator
{
    public function set(PendingRequest $pendingRequest): void
    {
        $token = (new TokenGenerator)->token();

        $pendingRequest->headers()->add('Authorization', 'Bearer ' . $token);
    }
}
