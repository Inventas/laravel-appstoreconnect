<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionReleaseRequestCreateRequest
 */
class AppStoreVersionReleaseRequestCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionReleaseRequestCreateRequestData $data,
    ) {}
}
