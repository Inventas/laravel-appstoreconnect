<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppBetaLicenseAgreementLinkageResponse
 */
class AppBetaLicenseAgreementLinkageResponse extends SpatieData
{
    public function __construct(
        public AppBetaLicenseAgreementLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
