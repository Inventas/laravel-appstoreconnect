<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardSetLinkageResponse
 */
class GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardSetLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationGameCenterLeaderboardSetLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
