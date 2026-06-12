<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionUpdateRequestData
 */
class GameCenterActivityVersionUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityVersionUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
