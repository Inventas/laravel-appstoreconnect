<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreementUpdateRequestDataAttributes
 */
class BetaLicenseAgreementUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $agreementText = new Optional,
    ) {}
}
