<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildUsagesV1metricResponseDataItem
 */
class BetaBuildUsagesV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, BetaBuildUsagesV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, BetaBuildUsagesV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
    ) {}
}
