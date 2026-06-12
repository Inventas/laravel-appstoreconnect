<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionKeyCreateRequestDataAttributes
 */
class AlternativeDistributionKeyCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $publicKey,
    ) {}
}
