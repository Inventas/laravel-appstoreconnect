<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationAppScreenshotSetsLinkagesResponse
 */
class AppStoreVersionExperimentTreatmentLocalizationAppScreenshotSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalizationAppScreenshotSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalizationAppScreenshotSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
