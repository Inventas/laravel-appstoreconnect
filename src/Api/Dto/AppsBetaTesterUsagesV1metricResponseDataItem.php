<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponseDataItem
 */
class AppsBetaTesterUsagesV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, AppsBetaTesterUsagesV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, AppsBetaTesterUsagesV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public AppsBetaTesterUsagesV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
    ) {}
}
