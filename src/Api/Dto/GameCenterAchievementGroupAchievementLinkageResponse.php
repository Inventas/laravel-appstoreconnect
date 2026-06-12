<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementGroupAchievementLinkageResponse
 */
class GameCenterAchievementGroupAchievementLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterAchievementGroupAchievementLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
