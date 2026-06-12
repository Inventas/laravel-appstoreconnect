<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAppStoreVersionExperiments
 */
class AppStoreVersionRelationshipsAppStoreVersionExperiments extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionRelationshipsAppStoreVersionExperimentsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionRelationshipsAppStoreVersionExperimentsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
