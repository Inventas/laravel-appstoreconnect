<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterAttributesAppDevicesItem
 */
class BetaTesterAttributesAppDevicesItem extends SpatieData
{
    public function __construct(
        public string|Optional $model = new Optional,
        public string|Optional $platform = new Optional,
        public string|Optional $osVersion = new Optional,
        public string|Optional $appBuildVersion = new Optional,
    ) {}
}
