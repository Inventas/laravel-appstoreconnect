<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementRelationshipsApp
 */
class EndUserLicenseAgreementRelationshipsApp extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
