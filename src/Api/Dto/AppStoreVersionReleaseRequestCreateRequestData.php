<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionReleaseRequestCreateRequestData
 */
class AppStoreVersionReleaseRequestCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionReleaseRequestCreateRequestDataRelationships $relationships,
    ) {}
}
