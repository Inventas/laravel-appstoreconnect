<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionDomainAttributes
 */
class AlternativeDistributionDomainAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $domain = new Optional,
        public string|Optional $referenceName = new Optional,
        public string|Optional $createdDate = new Optional,
    ) {}
}
