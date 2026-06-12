<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleRelationshipsAutomaticPrices
 */
class InAppPurchasePriceScheduleRelationshipsAutomaticPrices extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePriceScheduleRelationshipsAutomaticPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchasePriceScheduleRelationshipsAutomaticPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
