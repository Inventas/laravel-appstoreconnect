<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequestDataRelationships
 */
class EndUserLicenseAgreementCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementCreateRequestDataRelationshipsApp $app,
        public EndUserLicenseAgreementCreateRequestDataRelationshipsTerritories $territories,
    ) {}
}
