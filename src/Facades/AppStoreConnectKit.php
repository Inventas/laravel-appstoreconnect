<?php

namespace Inventas\AppStoreConnectKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inventas\AppStoreConnectKit\AppStoreConnectKit
 */
class AppStoreConnectKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inventas\AppStoreConnectKit\AppStoreConnectKit::class;
    }
}
