<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentRelationshipsAppStoreVersionExperimentTreatments
 */
class AppStoreVersionExperimentRelationshipsAppStoreVersionExperimentTreatments extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentRelationshipsAppStoreVersionExperimentTreatmentsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionExperimentRelationshipsAppStoreVersionExperimentTreatmentsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
