<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeRelationshipsPrices
 */
class InAppPurchaseOfferCodeRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseOfferCodeRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
