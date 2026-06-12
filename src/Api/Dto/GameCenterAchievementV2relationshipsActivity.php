<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2relationshipsActivity
 */
class GameCenterAchievementV2relationshipsActivity extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterAchievementV2relationshipsActivityData|Optional $data = new Optional,
    ) {}
}
