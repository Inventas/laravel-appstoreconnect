<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponse
 */
class AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentV2appStoreVersionExperimentTreatmentsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
