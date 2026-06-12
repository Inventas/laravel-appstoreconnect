<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUpdateRequestDataAttributes
 */
class BuildUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $expired = new Optional,
        public bool|Optional|null $usesNonExemptEncryption = new Optional,
    ) {}
}
