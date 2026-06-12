<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementRelationshipsActivity
 */
class GameCenterAchievementRelationshipsActivity extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterAchievementRelationshipsActivityData|Optional $data = new Optional,
    ) {}
}
