<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementUpdateRequest
 */
class EndUserLicenseAgreementUpdateRequest extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementUpdateRequestData $data,
    ) {}
}
