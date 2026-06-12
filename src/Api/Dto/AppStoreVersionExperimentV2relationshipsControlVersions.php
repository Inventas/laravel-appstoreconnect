<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2relationshipsControlVersions
 */
class AppStoreVersionExperimentV2relationshipsControlVersions extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionExperimentV2relationshipsControlVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionExperimentV2relationshipsControlVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
