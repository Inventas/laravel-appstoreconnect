<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAttributes
 */
class AppClipAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $bundleId = new Optional,
    ) {}
}
