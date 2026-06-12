<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailAttributes
 */
class GameCenterDetailAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $arcadeEnabled = new Optional,
        public bool|Optional $challengeEnabled = new Optional,
    ) {}
}
