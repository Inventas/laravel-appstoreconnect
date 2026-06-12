<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiManualPullRequestStartCondition
 */
class CiManualPullRequestStartCondition extends SpatieData
{
    public function __construct(
        public CiBranchPatterns|Optional $source = new Optional,
        public CiBranchPatterns|Optional $destination = new Optional,
    ) {}
}
