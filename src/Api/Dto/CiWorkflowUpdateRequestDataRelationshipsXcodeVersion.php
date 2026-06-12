<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowUpdateRequestDataRelationshipsXcodeVersion
 */
class CiWorkflowUpdateRequestDataRelationshipsXcodeVersion extends SpatieData
{
    public function __construct(
        public CiWorkflowUpdateRequestDataRelationshipsXcodeVersionData|Optional $data = new Optional,
    ) {}
}
