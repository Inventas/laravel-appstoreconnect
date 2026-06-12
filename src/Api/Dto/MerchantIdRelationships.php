<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdRelationships
 */
class MerchantIdRelationships extends SpatieData
{
    public function __construct(
        public MerchantIdRelationshipsCertificates|Optional $certificates = new Optional,
    ) {}
}
