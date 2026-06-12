<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaLicenseAgreementUpdateRequest
 */
class BetaLicenseAgreementUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaLicenseAgreementUpdateRequestData $data,
    ) {}
}
