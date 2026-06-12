<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdWithoutIncludesResponse
 */
class BundleIdWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public BundleId $data,
        public DocumentLinks $links,
    ) {}
}
