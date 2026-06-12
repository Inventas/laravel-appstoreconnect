<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentResponse
 */
class AppStoreVersionExperimentTreatmentResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionExperiment>|Optional  $included
     */
    public function __construct(
        public AppStoreVersionExperimentTreatment $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatmentLocalization|AppStoreVersionExperiment>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
