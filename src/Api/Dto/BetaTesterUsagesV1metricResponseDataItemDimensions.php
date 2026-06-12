<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterUsagesV1metricResponseDataItemDimensions
 */
class BetaTesterUsagesV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public BetaTesterUsagesV1metricResponseDataItemDimensionsApps|Optional $apps = new Optional,
    ) {}
}
