<?php

namespace Inventas\AppStoreConnectKit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppStoreConnectKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-appstoreconnect')
            ->hasConfigFile();
    }
}
