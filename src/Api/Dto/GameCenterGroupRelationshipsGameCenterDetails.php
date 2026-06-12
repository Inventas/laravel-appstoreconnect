<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterDetails
 */
class GameCenterGroupRelationshipsGameCenterDetails extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterDetailsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterDetailsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
