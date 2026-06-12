<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionUpdateRequestData
 */
class GameCenterAppVersionUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAppVersionUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
