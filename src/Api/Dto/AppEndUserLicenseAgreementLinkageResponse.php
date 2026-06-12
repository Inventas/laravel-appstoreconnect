<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEndUserLicenseAgreementLinkageResponse
 */
class AppEndUserLicenseAgreementLinkageResponse extends SpatieData
{
    public function __construct(
        public AppEndUserLicenseAgreementLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
