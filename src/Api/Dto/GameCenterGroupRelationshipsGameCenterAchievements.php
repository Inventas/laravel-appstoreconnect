<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterAchievements
 */
class GameCenterGroupRelationshipsGameCenterAchievements extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterAchievementsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterAchievementsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
