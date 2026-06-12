<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupUpdateRequestData
 */
class GameCenterGroupUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterGroupUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
