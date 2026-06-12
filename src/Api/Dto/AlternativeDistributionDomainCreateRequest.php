<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionDomainCreateRequest
 */
class AlternativeDistributionDomainCreateRequest extends SpatieData
{
    public function __construct(
        public AlternativeDistributionDomainCreateRequestData $data,
    ) {}
}
