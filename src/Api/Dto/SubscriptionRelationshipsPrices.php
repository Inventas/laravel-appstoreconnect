<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsPrices
 */
class SubscriptionRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
