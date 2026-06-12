<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestDataRelationshipsSourceBranchOrTag
 */
class CiBuildRunCreateRequestDataRelationshipsSourceBranchOrTag extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestDataRelationshipsSourceBranchOrTagData|Optional $data = new Optional,
    ) {}
}
