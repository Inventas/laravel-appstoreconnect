<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleCreateRequest
 */
class InAppPurchasePriceScheduleCreateRequest extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePriceInlineCreate|TerritoryInlineCreate>|Optional  $included
     */
    public function __construct(
        public InAppPurchasePriceScheduleCreateRequestData $data,
        /** @var array<int, InAppPurchasePriceInlineCreate|TerritoryInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
