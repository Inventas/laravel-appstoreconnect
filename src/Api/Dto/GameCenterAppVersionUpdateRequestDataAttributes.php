<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionUpdateRequestDataAttributes
 */
class GameCenterAppVersionUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $enabled = new Optional,
    ) {}
}
