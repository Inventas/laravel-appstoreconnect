<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildUsagesV1metricResponseDataItemDataPointsItemValues
 */
class BetaBuildUsagesV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $crashCount = new Optional,
        public int|Optional $installCount = new Optional,
        public int|Optional $sessionCount = new Optional,
        public int|Optional $feedbackCount = new Optional,
        public int|Optional $inviteCount = new Optional,
    ) {}
}
