<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowCreateRequestDataRelationshipsXcodeVersion
 */
class CiWorkflowCreateRequestDataRelationshipsXcodeVersion extends SpatieData
{
    public function __construct(
        public CiWorkflowCreateRequestDataRelationshipsXcodeVersionData $data,
    ) {}
}
