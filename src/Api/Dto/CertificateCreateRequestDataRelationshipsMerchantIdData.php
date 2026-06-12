<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CertificateCreateRequestDataRelationshipsMerchantIdData
 */
class CertificateCreateRequestDataRelationshipsMerchantIdData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
