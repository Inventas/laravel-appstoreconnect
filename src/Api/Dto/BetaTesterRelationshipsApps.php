<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterRelationshipsApps
 */
class BetaTesterRelationshipsApps extends SpatieData
{
    /**
     * @param  array<int, BetaTesterRelationshipsAppsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaTesterRelationshipsAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
