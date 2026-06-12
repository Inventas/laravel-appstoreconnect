<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsAchievementsV2
 */
class GameCenterActivityRelationshipsAchievementsV2 extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityRelationshipsAchievementsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterActivityRelationshipsAchievementsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
