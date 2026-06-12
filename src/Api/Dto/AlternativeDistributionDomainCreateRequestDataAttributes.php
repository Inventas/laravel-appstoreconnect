<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionDomainCreateRequestDataAttributes
 */
class AlternativeDistributionDomainCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $domain,
        public string $referenceName,
    ) {}
}
