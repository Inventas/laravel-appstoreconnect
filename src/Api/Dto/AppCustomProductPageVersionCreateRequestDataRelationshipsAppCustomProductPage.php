<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPage
 */
class AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPage extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageData $data,
    ) {}
}
