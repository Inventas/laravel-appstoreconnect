<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationGameCenterLeaderboardImageLinkageResponse
 */
class GameCenterLeaderboardLocalizationGameCenterLeaderboardImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationGameCenterLeaderboardImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
