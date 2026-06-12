<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionDomainResponse
 */
class AlternativeDistributionDomainResponse extends SpatieData
{
    public function __construct(
        public AlternativeDistributionDomain $data,
        public DocumentLinks $links,
    ) {}
}
