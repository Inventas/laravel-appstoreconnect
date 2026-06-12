<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterEnabledVersionRelationshipsCompatibleVersions
 */
class GameCenterEnabledVersionRelationshipsCompatibleVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterEnabledVersionRelationshipsCompatibleVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterEnabledVersionRelationshipsCompatibleVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
