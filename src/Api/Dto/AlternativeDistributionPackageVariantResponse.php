<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionPackageVariantResponse
 */
class AlternativeDistributionPackageVariantResponse extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageVariant $data,
        public DocumentLinks $links,
    ) {}
}
