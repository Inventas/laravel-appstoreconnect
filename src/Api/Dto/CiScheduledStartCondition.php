<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiScheduledStartCondition
 */
class CiScheduledStartCondition extends SpatieData
{
    public function __construct(
        public CiBranchPatterns|Optional $source = new Optional,
        public CiScheduledStartConditionSchedule|Optional $schedule = new Optional,
    ) {}
}
