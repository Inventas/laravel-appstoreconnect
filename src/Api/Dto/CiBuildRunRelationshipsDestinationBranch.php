<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsDestinationBranch
 */
class CiBuildRunRelationshipsDestinationBranch extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsDestinationBranchData|Optional $data = new Optional,
    ) {}
}
