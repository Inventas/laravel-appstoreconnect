<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildUsagesV1metricResponseDataItemDataPointsItem
 */
class BetaBuildUsagesV1metricResponseDataItemDataPointsItem extends SpatieData
{
    public function __construct(
        public string|Optional $start = new Optional,
        public string|Optional $end = new Optional,
        public BetaBuildUsagesV1metricResponseDataItemDataPointsItemValues|Optional $values = new Optional,
    ) {}
}
