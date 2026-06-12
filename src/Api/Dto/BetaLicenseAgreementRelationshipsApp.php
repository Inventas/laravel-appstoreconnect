<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreementRelationshipsApp
 */
class BetaLicenseAgreementRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaLicenseAgreementRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
