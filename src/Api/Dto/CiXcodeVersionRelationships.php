<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionRelationships
 */
class CiXcodeVersionRelationships extends SpatieData
{
    public function __construct(
        public CiXcodeVersionRelationshipsMacOsVersions|Optional $macOsVersions = new Optional,
    ) {}
}
