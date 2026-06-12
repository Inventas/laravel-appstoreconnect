<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateRelationships
 */
class CertificateRelationships extends SpatieData
{
    public function __construct(
        public CertificateRelationshipsPassTypeId|Optional $passTypeId = new Optional,
    ) {}
}
