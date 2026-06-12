<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTesters
 */
class AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTesters extends SpatieData
{
    public function __construct(
        public AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTestersLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
