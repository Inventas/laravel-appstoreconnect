<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageV2createRequestDataRelationshipsLocalization
 */
class GameCenterLeaderboardSetImageV2createRequestDataRelationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2createRequestDataRelationshipsLocalizationData $data,
    ) {}
}
