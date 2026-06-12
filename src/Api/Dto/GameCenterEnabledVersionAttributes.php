<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterEnabledVersionAttributes
 */
class GameCenterEnabledVersionAttributes extends SpatieData
{
    public function __construct(
        public Platform|Optional $platform = new Optional,
        public string|Optional $versionString = new Optional,
        public ImageAsset|Optional $iconAsset = new Optional,
    ) {}
}
