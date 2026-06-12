<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleRelationshipsAutomaticPrices
 */
class AppPriceScheduleRelationshipsAutomaticPrices extends SpatieData
{
    /**
     * @param  array<int, AppPriceScheduleRelationshipsAutomaticPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppPriceScheduleRelationshipsAutomaticPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
