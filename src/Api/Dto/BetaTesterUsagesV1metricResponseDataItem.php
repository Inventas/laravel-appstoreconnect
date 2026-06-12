<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterUsagesV1metricResponseDataItem
 */
class BetaTesterUsagesV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, BetaTesterUsagesV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, BetaTesterUsagesV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public BetaTesterUsagesV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
    ) {}
}
