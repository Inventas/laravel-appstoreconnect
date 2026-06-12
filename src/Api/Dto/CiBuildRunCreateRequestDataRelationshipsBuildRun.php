<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestDataRelationshipsBuildRun
 */
class CiBuildRunCreateRequestDataRelationshipsBuildRun extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestDataRelationshipsBuildRunData|Optional $data = new Optional,
    ) {}
}
