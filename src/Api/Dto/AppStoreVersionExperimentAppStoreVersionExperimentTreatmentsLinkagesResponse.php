<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentAppStoreVersionExperimentTreatmentsLinkagesResponse
 */
class AppStoreVersionExperimentAppStoreVersionExperimentTreatmentsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentAppStoreVersionExperimentTreatmentsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentAppStoreVersionExperimentTreatmentsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
