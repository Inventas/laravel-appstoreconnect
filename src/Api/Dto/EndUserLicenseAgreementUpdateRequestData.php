<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementUpdateRequestData
 */
class EndUserLicenseAgreementUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public EndUserLicenseAgreementUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public EndUserLicenseAgreementUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
