<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionPackageDeltaResponse
 */
class AlternativeDistributionPackageDeltaResponse extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageDelta $data,
        public DocumentLinks $links,
    ) {}
}
