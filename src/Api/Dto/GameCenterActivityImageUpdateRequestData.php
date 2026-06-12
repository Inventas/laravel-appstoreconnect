<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityImageUpdateRequestData
 */
class GameCenterActivityImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
