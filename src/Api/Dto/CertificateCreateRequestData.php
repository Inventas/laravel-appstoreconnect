<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateCreateRequestData
 */
class CertificateCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public CertificateCreateRequestDataAttributes $attributes,
        public CertificateCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
