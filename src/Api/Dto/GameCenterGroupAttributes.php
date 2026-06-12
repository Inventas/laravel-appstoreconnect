<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupAttributes
 */
class GameCenterGroupAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
    ) {}
}
