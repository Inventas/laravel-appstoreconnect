<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionReleaseCreateRequestDataRelationships
 */
class GameCenterActivityVersionReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseCreateRequestDataRelationshipsGameCenterDetail $gameCenterDetail,
        public GameCenterActivityVersionReleaseCreateRequestDataRelationshipsVersion $version,
    ) {}
}
