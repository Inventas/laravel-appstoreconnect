<?php

namespace Inventas\AppStoreConnectKit\Commands;

use Illuminate\Console\Command;

class AppStoreConnectKitCommand extends Command
{
    public $signature = 'laravel-appstoreconnect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
