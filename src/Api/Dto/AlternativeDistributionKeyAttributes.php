<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionKeyAttributes
 */
class AlternativeDistributionKeyAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $publicKey = new Optional,
    ) {}
}
