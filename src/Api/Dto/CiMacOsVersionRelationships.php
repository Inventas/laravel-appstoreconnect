<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersionRelationships
 */
class CiMacOsVersionRelationships extends SpatieData
{
    public function __construct(
        public CiMacOsVersionRelationshipsXcodeVersions|Optional $xcodeVersions = new Optional,
    ) {}
}
