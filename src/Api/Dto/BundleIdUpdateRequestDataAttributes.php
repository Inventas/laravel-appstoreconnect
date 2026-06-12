<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdUpdateRequestDataAttributes
 */
class BundleIdUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
    ) {}
}
