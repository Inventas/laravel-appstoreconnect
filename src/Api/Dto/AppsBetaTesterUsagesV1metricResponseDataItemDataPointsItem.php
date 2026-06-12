<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponseDataItemDataPointsItem
 */
class AppsBetaTesterUsagesV1metricResponseDataItemDataPointsItem extends SpatieData
{
    public function __construct(
        public string|Optional $start = new Optional,
        public string|Optional $end = new Optional,
        public AppsBetaTesterUsagesV1metricResponseDataItemDataPointsItemValues|Optional $values = new Optional,
    ) {}
}
