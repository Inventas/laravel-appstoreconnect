<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowRelationshipsXcodeVersion
 */
class CiWorkflowRelationshipsXcodeVersion extends SpatieData
{
    public function __construct(
        public CiWorkflowRelationshipsXcodeVersionData|Optional $data = new Optional,
    ) {}
}
