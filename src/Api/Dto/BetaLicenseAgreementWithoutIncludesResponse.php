<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaLicenseAgreementWithoutIncludesResponse
 */
class BetaLicenseAgreementWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public BetaLicenseAgreement $data,
        public DocumentLinks $links,
    ) {}
}
