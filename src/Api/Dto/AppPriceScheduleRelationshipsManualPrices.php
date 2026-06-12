<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleRelationshipsManualPrices
 */
class AppPriceScheduleRelationshipsManualPrices extends SpatieData
{
    /**
     * @param  array<int, AppPriceScheduleRelationshipsManualPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppPriceScheduleRelationshipsManualPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
