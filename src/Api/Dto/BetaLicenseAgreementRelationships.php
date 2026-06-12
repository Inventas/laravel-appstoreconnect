<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreementRelationships
 */
class BetaLicenseAgreementRelationships extends SpatieData
{
    public function __construct(
        public BetaLicenseAgreementRelationshipsApp|Optional $app = new Optional,
    ) {}
}
