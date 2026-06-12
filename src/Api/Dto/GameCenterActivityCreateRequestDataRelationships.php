<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityCreateRequestDataRelationships
 */
class GameCenterActivityCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityCreateRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterActivityCreateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterActivityCreateRequestDataRelationshipsVersions|Optional $versions = new Optional,
    ) {}
}
