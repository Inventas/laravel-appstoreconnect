<?php

namespace Inventas\AppStoreConnectKit;

use Inventas\AppStoreConnectKit\Connect\ConnectAuthenticator;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Connector;

class AppStoreConnector extends Connector
{
    public function __construct(
        protected AppStoreConnectEnvironment $environment = AppStoreConnectEnvironment::Production
    ) {
    }

    public function resolveBaseUrl(): string
    {
        return $this->environment->url();
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new ConnectAuthenticator;
    }
}
