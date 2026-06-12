<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementWithoutIncludesResponse
 */
class EndUserLicenseAgreementWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public EndUserLicenseAgreement $data,
        public DocumentLinks $links,
    ) {}
}
