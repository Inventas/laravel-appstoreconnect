<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2imageLinkageResponse
 */
class GameCenterLeaderboardSetLocalizationV2imageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2imageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
