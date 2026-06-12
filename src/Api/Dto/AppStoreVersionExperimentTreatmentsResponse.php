<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentsResponse
 */
class AppStoreVersionExperimentTreatmentsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatment>  $data
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionExperiment>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentTreatment> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionExperiment>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
