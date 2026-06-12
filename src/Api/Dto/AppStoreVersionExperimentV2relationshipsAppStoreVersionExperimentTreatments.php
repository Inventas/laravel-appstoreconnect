<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2relationshipsAppStoreVersionExperimentTreatments
 */
class AppStoreVersionExperimentV2relationshipsAppStoreVersionExperimentTreatments extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentV2relationshipsAppStoreVersionExperimentTreatmentsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionExperimentV2relationshipsAppStoreVersionExperimentTreatmentsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
