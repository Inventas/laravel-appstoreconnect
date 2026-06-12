<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalizationData
 */
class GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalizationData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
