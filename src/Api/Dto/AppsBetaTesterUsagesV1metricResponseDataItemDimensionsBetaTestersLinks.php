<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTestersLinks
 */
class AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTestersLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
        public string|Optional $related = new Optional,
    ) {}
}
