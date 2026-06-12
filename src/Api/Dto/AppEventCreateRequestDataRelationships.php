<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventCreateRequestDataRelationships
 */
class AppEventCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppEventCreateRequestDataRelationshipsApp $app,
    ) {}
}
