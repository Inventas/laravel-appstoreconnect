<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleResponse
 */
class AppPriceScheduleResponse extends SpatieData
{
    /**
     * @param  array<int, AppPriceV2|App|Territory>|Optional  $included
     */
    public function __construct(
        public AppPriceSchedule $data,
        public DocumentLinks $links,
        /** @var array<int, AppPriceV2|App|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
