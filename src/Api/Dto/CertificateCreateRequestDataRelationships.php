<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateCreateRequestDataRelationships
 */
class CertificateCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public CertificateCreateRequestDataRelationshipsMerchantId|Optional $merchantId = new Optional,
        public CertificateCreateRequestDataRelationshipsPassTypeId|Optional $passTypeId = new Optional,
    ) {}
}
