<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCreateRequestData
 */
class BundleIdCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BundleIdCreateRequestDataAttributes $attributes,
    ) {}
}
