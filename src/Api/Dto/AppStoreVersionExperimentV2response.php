<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2Response
 */
class AppStoreVersionExperimentV2response extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentTreatment|AppStoreVersion|App>|Optional  $included
     */
    public function __construct(
        public AppStoreVersionExperimentV2 $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatment|AppStoreVersion|App>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
