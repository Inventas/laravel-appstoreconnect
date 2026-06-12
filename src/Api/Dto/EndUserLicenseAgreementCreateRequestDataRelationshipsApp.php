<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequestDataRelationshipsApp
 */
class EndUserLicenseAgreementCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementCreateRequestDataRelationshipsAppData $data,
    ) {}
}
