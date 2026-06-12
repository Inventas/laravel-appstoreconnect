<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterAchievementsV2
 */
class GameCenterDetailRelationshipsGameCenterAchievementsV2 extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsGameCenterAchievementsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsGameCenterAchievementsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
