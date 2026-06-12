<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalization
 */
class GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalizationData $data,
    ) {}
}
