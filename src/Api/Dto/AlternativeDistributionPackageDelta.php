<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageDelta
 */
class AlternativeDistributionPackageDelta extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AlternativeDistributionPackageDeltaAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
