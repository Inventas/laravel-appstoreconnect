<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationAppPreviewSetsLinkagesResponse
 */
class AppStoreVersionExperimentTreatmentLocalizationAppPreviewSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalizationAppPreviewSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalizationAppPreviewSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
