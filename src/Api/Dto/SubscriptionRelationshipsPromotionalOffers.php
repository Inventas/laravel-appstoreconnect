<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsPromotionalOffers
 */
class SubscriptionRelationshipsPromotionalOffers extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsPromotionalOffersDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsPromotionalOffersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
