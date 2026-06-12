<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagAttributes
 */
class AppTagAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public bool|Optional $visibleInAppStore = new Optional,
    ) {}
}
