<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsSourceBranchOrTag
 */
class CiBuildRunRelationshipsSourceBranchOrTag extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsSourceBranchOrTagData|Optional $data = new Optional,
    ) {}
}
