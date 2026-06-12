<?php

namespace Inventas\AppStoreConnectKit;

use Inventas\AppStoreConnectKit\Api\AppStoreConnect;
use Inventas\AppStoreConnectKit\JWT\TokenGenerator;

class AppStoreConnector extends AppStoreConnect
{
    public function __construct(
        protected AppStoreConnectEnvironment $environment = AppStoreConnectEnvironment::Production
    ) {
        parent::__construct((new TokenGenerator)->token());
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
}
