<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CertificateUpdateRequest
 */
class CertificateUpdateRequest extends SpatieData
{
    public function __construct(
        public CertificateUpdateRequestData $data,
    ) {}
}
