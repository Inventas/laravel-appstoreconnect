<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2imageLinkageResponse
 */
class GameCenterAchievementLocalizationV2imageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2imageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
