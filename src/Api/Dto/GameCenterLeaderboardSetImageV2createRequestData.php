<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageV2createRequestData
 */
class GameCenterLeaderboardSetImageV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetImageV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetImageV2createRequestDataRelationships $relationships,
    ) {}
}
