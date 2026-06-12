<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowUpdateRequestDataRelationshipsMacOsVersion
 */
class CiWorkflowUpdateRequestDataRelationshipsMacOsVersion extends SpatieData
{
    public function __construct(
        public CiWorkflowUpdateRequestDataRelationshipsMacOsVersionData|Optional $data = new Optional,
    ) {}
}
