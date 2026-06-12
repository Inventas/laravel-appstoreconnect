<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2createRequestData
 */
class GameCenterLeaderboardImageV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardImageV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardImageV2createRequestDataRelationships $relationships,
    ) {}
}
