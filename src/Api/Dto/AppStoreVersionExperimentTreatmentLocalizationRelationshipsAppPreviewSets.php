<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppPreviewSets
 */
class AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppPreviewSets extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppPreviewSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppPreviewSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
