<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionReleaseRelationships
 */
class GameCenterActivityVersionReleaseRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseRelationshipsVersion|Optional $version = new Optional,
    ) {}
}
