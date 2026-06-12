<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVariant
 */
class AlternativeDistributionPackageVariant extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AlternativeDistributionPackageVariantAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
