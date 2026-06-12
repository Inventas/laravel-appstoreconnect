<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowRelationshipsMacOsVersion
 */
class CiWorkflowRelationshipsMacOsVersion extends SpatieData
{
    public function __construct(
        public CiWorkflowRelationshipsMacOsVersionData|Optional $data = new Optional,
    ) {}
}
