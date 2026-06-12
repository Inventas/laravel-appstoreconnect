<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaPublicLinkUsagesV1metricResponseDataItem
 */
class BetaPublicLinkUsagesV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
    ) {}
}
