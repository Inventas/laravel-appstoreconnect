<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentsResponse
 */
class AppStoreVersionExperimentsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperiment>  $data
     * @param  array<int, AppStoreVersionExperimentTreatment|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersionExperiment> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreVersionExperimentTreatment|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
