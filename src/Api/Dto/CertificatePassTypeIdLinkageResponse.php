<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CertificatePassTypeIdLinkageResponse
 */
class CertificatePassTypeIdLinkageResponse extends SpatieData
{
    public function __construct(
        public CertificatePassTypeIdLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
