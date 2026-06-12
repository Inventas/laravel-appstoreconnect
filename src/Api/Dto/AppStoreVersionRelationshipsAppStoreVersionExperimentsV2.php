<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAppStoreVersionExperimentsV2
 */
class AppStoreVersionRelationshipsAppStoreVersionExperimentsV2 extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionRelationshipsAppStoreVersionExperimentsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionRelationshipsAppStoreVersionExperimentsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
