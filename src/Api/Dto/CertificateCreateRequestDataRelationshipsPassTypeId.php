<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateCreateRequestDataRelationshipsPassTypeId
 */
class CertificateCreateRequestDataRelationshipsPassTypeId extends SpatieData
{
    public function __construct(
        public CertificateCreateRequestDataRelationshipsPassTypeIdData|Optional $data = new Optional,
    ) {}
}
