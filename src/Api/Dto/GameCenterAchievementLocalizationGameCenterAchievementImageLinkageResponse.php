<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationGameCenterAchievementImageLinkageResponse
 */
class GameCenterAchievementLocalizationGameCenterAchievementImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationGameCenterAchievementImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
