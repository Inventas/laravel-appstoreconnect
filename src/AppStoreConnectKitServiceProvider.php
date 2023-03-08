<?php

namespace Inventas\AppStoreConnectKit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inventas\AppStoreConnectKit\Commands\AppStoreConnectKitCommand;

class AppStoreConnectKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-appstoreconnect')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-appstoreconnect_table')
            ->hasCommand(AppStoreConnectKitCommand::class);
    }
}
