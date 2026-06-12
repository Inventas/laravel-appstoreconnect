<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppInfos
 */
class AppRelationshipsAppInfos extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAppInfosDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAppInfosDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
