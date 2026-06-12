<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsIapPriceSchedule
 */
class InAppPurchaseV2relationshipsIapPriceSchedule extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchaseV2relationshipsIapPriceScheduleData|Optional $data = new Optional,
    ) {}
}
