<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationGameCenterLeaderboardSetImageLinkageResponse
 */
class GameCenterLeaderboardSetLocalizationGameCenterLeaderboardSetImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationGameCenterLeaderboardSetImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
