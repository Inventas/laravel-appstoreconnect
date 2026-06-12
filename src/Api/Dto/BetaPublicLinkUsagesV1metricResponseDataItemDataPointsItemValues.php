<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItemValues
 */
class BetaPublicLinkUsagesV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $viewCount = new Optional,
        public int|Optional $acceptedCount = new Optional,
        public int|Optional $didNotAcceptCount = new Optional,
        public int|Optional $didNotMeetCriteriaCount = new Optional,
        public int|float|Optional $notRelevantRatio = new Optional,
        public int|float|Optional $notClearRatio = new Optional,
        public int|float|Optional $notInterestingRatio = new Optional,
    ) {}
}
