<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementUpdateRequestDataAttributes
 */
class EndUserLicenseAgreementUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $agreementText = new Optional,
    ) {}
}
