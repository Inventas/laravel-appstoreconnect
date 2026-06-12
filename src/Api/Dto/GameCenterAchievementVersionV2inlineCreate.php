<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2inlineCreate
 */
class GameCenterAchievementVersionV2inlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterAchievementVersionV2inlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
