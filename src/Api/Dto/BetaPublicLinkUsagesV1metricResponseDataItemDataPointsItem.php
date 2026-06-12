<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItem
 */
class BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItem extends SpatieData
{
    public function __construct(
        public string|Optional $start = new Optional,
        public string|Optional $end = new Optional,
        public BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItemValues|Optional $values = new Optional,
    ) {}
}
