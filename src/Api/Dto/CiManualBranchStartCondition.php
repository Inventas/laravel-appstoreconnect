<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiManualBranchStartCondition
 */
class CiManualBranchStartCondition extends SpatieData
{
    public function __construct(
        public CiBranchPatterns|Optional $source = new Optional,
    ) {}
}
