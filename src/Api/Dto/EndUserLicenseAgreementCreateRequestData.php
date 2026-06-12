<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequestData
 */
class EndUserLicenseAgreementCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public EndUserLicenseAgreementCreateRequestDataAttributes $attributes,
        public EndUserLicenseAgreementCreateRequestDataRelationships $relationships,
    ) {}
}
