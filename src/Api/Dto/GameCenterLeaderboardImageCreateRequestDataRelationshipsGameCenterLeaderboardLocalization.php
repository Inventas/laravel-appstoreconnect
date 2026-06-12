<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageCreateRequestDataRelationshipsGameCenterLeaderboardLocalization
 */
class GameCenterLeaderboardImageCreateRequestDataRelationshipsGameCenterLeaderboardLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageCreateRequestDataRelationshipsGameCenterLeaderboardLocalizationData $data,
    ) {}
}
