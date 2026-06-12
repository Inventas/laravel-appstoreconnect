<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementRelationships
 */
class EndUserLicenseAgreementRelationships extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementRelationshipsApp|Optional $app = new Optional,
        public EndUserLicenseAgreementRelationshipsTerritories|Optional $territories = new Optional,
    ) {}
}
