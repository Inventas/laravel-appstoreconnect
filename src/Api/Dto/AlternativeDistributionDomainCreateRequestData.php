<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionDomainCreateRequestData
 */
class AlternativeDistributionDomainCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AlternativeDistributionDomainCreateRequestDataAttributes $attributes,
    ) {}
}
