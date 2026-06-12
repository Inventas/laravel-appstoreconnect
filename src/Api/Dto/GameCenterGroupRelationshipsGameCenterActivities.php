<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterActivities
 */
class GameCenterGroupRelationshipsGameCenterActivities extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterActivitiesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterActivitiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
