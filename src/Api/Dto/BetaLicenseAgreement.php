<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreement
 */
class BetaLicenseAgreement extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaLicenseAgreementAttributes|Optional $attributes = new Optional,
        public BetaLicenseAgreementRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
