<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequestDataItem
 */
class GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
