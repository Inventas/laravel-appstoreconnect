<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentResponse
 */
class AppStoreVersionExperimentResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatment|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        public AppStoreVersionExperiment $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatment|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
