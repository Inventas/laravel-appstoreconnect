<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementUpdateRequestDataRelationships
 */
class EndUserLicenseAgreementUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementUpdateRequestDataRelationshipsTerritories|Optional $territories = new Optional,
    ) {}
}
