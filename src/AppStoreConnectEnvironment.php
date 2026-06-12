<?php

namespace Inventas\AppStoreConnectKit;

enum AppStoreConnectEnvironment
{
    case Production;

    public function url(): string
    {
        return match ($this) {
            self::Production => 'https://api.appstoreconnect.apple.com/',
        };
    }
}
