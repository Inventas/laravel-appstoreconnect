<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdUpdateRequest
 */
class BundleIdUpdateRequest extends SpatieData
{
    public function __construct(
        public BundleIdUpdateRequestData $data,
    ) {}
}
