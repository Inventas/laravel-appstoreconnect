<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequest
 */
class EndUserLicenseAgreementCreateRequest extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreementCreateRequestData $data,
    ) {}
}
