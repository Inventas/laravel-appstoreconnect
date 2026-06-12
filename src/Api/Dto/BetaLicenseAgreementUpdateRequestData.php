<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreementUpdateRequestData
 */
class BetaLicenseAgreementUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaLicenseAgreementUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
