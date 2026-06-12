<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionAttributes
 */
class GameCenterAppVersionAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $enabled = new Optional,
    ) {}
}
