<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageCreateRequestDataRelationshipsAppCustomProductPageVersions
 */
class AppCustomProductPageCreateRequestDataRelationshipsAppCustomProductPageVersions extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageCreateRequestDataRelationshipsAppCustomProductPageVersionsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageCreateRequestDataRelationshipsAppCustomProductPageVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
