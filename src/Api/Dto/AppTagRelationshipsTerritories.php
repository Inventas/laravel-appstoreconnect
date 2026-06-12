<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagRelationshipsTerritories
 */
class AppTagRelationshipsTerritories extends SpatieData
{
    /**
     * @param  array<int, AppTagRelationshipsTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppTagRelationshipsTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
