<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCreateRequestDataAttributes
 */
class BundleIdCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public BundleIdPlatform $platform,
        public string $identifier,
        public string|Optional|null $seedId = new Optional,
    ) {}
}
