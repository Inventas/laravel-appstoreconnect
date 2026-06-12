<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterActivities
 */
class GameCenterDetailRelationshipsGameCenterActivities extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsGameCenterActivitiesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsGameCenterActivitiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
