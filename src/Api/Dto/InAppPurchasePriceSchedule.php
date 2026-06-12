<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceSchedule
 */
class InAppPurchasePriceSchedule extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchasePriceScheduleRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
