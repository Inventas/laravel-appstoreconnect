<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationGameCenterAchievementLinkageResponse
 */
class GameCenterAchievementLocalizationGameCenterAchievementLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationGameCenterAchievementLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
