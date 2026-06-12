<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsAchievements
 */
class GameCenterActivityRelationshipsAchievements extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityRelationshipsAchievementsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterActivityRelationshipsAchievementsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
