<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentsV2Response
 */
class AppStoreVersionExperimentsV2response extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentV2>  $data
     * @param  array<int, AppStoreVersionExperimentTreatment|AppStoreVersion|App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperimentV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatment|AppStoreVersion|App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
