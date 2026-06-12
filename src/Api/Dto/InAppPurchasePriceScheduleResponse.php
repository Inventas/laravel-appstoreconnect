<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleResponse
 */
class InAppPurchasePriceScheduleResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePrice|Territory>|Optional  $included
     */
    public function __construct(
        public InAppPurchasePriceSchedule $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchasePrice|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
