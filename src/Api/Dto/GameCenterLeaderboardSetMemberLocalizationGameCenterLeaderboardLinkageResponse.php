<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardLinkageResponse
 */
class GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
