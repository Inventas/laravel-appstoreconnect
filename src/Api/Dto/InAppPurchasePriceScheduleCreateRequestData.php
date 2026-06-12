<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleCreateRequestData
 */
class InAppPurchasePriceScheduleCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchasePriceScheduleCreateRequestDataRelationships $relationships,
    ) {}
}
