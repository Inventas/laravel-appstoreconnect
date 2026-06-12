<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterUsagesV1metricResponseDataItemDimensionsAppsLinks
 */
class BetaTesterUsagesV1metricResponseDataItemDimensionsAppsLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
        public string|Optional $related = new Optional,
    ) {}
}
