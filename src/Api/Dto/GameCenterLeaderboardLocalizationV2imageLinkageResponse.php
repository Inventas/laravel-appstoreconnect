<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2imageLinkageResponse
 */
class GameCenterLeaderboardLocalizationV2imageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2imageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
