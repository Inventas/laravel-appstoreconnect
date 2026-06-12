<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionPackageCreateRequest
 */
class AlternativeDistributionPackageCreateRequest extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageCreateRequestData $data,
    ) {}
}
