<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateAttributes
 */
class CertificateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public CertificateType|Optional $certificateType = new Optional,
        public string|Optional $displayName = new Optional,
        public string|Optional $serialNumber = new Optional,
        public BundleIdPlatform|Optional $platform = new Optional,
        public string|Optional $expirationDate = new Optional,
        public string|Optional $certificateContent = new Optional,
        public bool|Optional $activated = new Optional,
    ) {}
}
