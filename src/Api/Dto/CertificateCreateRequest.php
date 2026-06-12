<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CertificateCreateRequest
 */
class CertificateCreateRequest extends SpatieData
{
    public function __construct(
        public CertificateCreateRequestData $data,
    ) {}
}
