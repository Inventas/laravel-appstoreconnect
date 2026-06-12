<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleCreateRequest
 */
class AppPriceScheduleCreateRequest extends SpatieData
{
    /**
     * @param  array<int, AppPriceV2inlineCreate|TerritoryInlineCreate>|Optional  $included
     */
    public function __construct(
        public AppPriceScheduleCreateRequestData $data,
        /** @var array<int, AppPriceV2inlineCreate|TerritoryInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
