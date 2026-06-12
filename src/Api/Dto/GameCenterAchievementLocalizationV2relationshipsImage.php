<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2relationshipsImage
 */
class GameCenterAchievementLocalizationV2relationshipsImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterAchievementLocalizationV2relationshipsImageData|Optional $data = new Optional,
    ) {}
}
