<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsEndUserLicenseAgreement
 */
class AppRelationshipsEndUserLicenseAgreement extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppRelationshipsEndUserLicenseAgreementData|Optional $data = new Optional,
    ) {}
}
