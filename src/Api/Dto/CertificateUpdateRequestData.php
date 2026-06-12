<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateUpdateRequestData
 */
class CertificateUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CertificateUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
