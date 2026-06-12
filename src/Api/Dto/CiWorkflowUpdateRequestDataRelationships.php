<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowUpdateRequestDataRelationships
 */
class CiWorkflowUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public CiWorkflowUpdateRequestDataRelationshipsXcodeVersion|Optional $xcodeVersion = new Optional,
        public CiWorkflowUpdateRequestDataRelationshipsMacOsVersion|Optional $macOsVersion = new Optional,
    ) {}
}
