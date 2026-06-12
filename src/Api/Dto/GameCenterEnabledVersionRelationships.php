<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterEnabledVersionRelationships
 */
class GameCenterEnabledVersionRelationships extends SpatieData
{
    public function __construct(
        public GameCenterEnabledVersionRelationshipsCompatibleVersions|Optional $compatibleVersions = new Optional,
        public GameCenterEnabledVersionRelationshipsApp|Optional $app = new Optional,
    ) {}
}
