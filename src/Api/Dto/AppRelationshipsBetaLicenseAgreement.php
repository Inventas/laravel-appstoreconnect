<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsBetaLicenseAgreement
 */
class AppRelationshipsBetaLicenseAgreement extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppRelationshipsBetaLicenseAgreementData|Optional $data = new Optional,
    ) {}
}
