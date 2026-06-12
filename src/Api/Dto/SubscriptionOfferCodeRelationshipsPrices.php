<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeRelationshipsPrices
 */
class SubscriptionOfferCodeRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionOfferCodeRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
