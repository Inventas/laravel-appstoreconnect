<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateRelationshipsPassTypeId
 */
class CertificateRelationshipsPassTypeId extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public CertificateRelationshipsPassTypeIdData|Optional $data = new Optional,
    ) {}
}
