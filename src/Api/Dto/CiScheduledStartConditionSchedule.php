<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiScheduledStartConditionSchedule
 */
class CiScheduledStartConditionSchedule extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $days
     */
    public function __construct(
        public string|Optional $frequency = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $days = new Optional,
        public int|Optional $hour = new Optional,
        public int|Optional $minute = new Optional,
        public string|Optional $timezone = new Optional,
    ) {}
}
