<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterAchievementsV2
 */
class GameCenterGroupRelationshipsGameCenterAchievementsV2 extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterAchievementsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterAchievementsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
