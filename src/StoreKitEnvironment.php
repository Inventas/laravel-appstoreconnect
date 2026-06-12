<?php

namespace Inventas\AppStoreConnectKit;

enum StoreKitEnvironment
{
    case Sandbox;
    case Production;

    public function url(): string
    {
        return match ($this) {
            self::Sandbox => 'https://api.storekit-sandbox.itunes.apple.com/',
            self::Production => 'https://api.storekit.itunes.apple.com/',
        };
    }
}
