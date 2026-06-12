<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequestDataAttributes
 */
class EndUserLicenseAgreementCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $agreementText,
    ) {}
}
