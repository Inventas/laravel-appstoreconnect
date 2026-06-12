<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponseDataItemDimensions
 */
class AppsBetaTesterUsagesV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public AppsBetaTesterUsagesV1metricResponseDataItemDimensionsBetaTesters|Optional $betaTesters = new Optional,
    ) {}
}
