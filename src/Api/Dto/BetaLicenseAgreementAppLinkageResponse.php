<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaLicenseAgreementAppLinkageResponse
 */
class BetaLicenseAgreementAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaLicenseAgreementAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
