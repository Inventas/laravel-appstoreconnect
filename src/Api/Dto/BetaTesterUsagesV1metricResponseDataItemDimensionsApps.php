<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterUsagesV1metricResponseDataItemDimensionsApps
 */
class BetaTesterUsagesV1metricResponseDataItemDimensionsApps extends SpatieData
{
    public function __construct(
        public BetaTesterUsagesV1metricResponseDataItemDimensionsAppsLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
