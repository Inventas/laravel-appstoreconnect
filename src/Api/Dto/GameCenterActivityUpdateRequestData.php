<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityUpdateRequestData
 */
class GameCenterActivityUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
