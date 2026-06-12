<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupCreateRequestData
 */
class GameCenterGroupCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterGroupCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
