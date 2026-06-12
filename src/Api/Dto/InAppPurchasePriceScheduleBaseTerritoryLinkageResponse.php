<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleBaseTerritoryLinkageResponse
 */
class InAppPurchasePriceScheduleBaseTerritoryLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceScheduleBaseTerritoryLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
