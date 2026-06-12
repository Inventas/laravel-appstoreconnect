<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2createRequestDataAttributes
 */
class GameCenterAchievementImageV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
    ) {}
}
