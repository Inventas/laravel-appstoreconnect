<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageCreateRequestDataRelationshipsApp
 */
class AppCustomProductPageCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppCustomProductPageCreateRequestDataRelationshipsAppData $data,
    ) {}
}
