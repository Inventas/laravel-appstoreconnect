<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVariantAttributes
 */
class AlternativeDistributionPackageVariantAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $url = new Optional,
        public string|Optional $urlExpirationDate = new Optional,
        public string|Optional $alternativeDistributionKeyBlob = new Optional,
        public string|Optional $fileChecksum = new Optional,
    ) {}
}
