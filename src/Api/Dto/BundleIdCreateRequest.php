<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCreateRequest
 */
class BundleIdCreateRequest extends SpatieData
{
    public function __construct(
        public BundleIdCreateRequestData $data,
    ) {}
}
