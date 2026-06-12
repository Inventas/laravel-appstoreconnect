<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileRelationships
 */
class ProfileRelationships extends SpatieData
{
    public function __construct(
        public ProfileRelationshipsBundleId|Optional $bundleId = new Optional,
        public ProfileRelationshipsDevices|Optional $devices = new Optional,
        public ProfileRelationshipsCertificates|Optional $certificates = new Optional,
    ) {}
}
