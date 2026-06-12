<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileCreateRequestDataRelationships
 */
class ProfileCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public ProfileCreateRequestDataRelationshipsBundleId $bundleId,
        public ProfileCreateRequestDataRelationshipsCertificates $certificates,
        public ProfileCreateRequestDataRelationshipsDevices|Optional $devices = new Optional,
    ) {}
}
