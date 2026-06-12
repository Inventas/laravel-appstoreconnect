<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppScreenshotSets
 */
class AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppScreenshotSets extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
