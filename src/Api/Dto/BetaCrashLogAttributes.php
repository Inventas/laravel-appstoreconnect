<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaCrashLogAttributes
 */
class BetaCrashLogAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $logText = new Optional,
    ) {}
}
