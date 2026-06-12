<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsWinBackOffers
 */
class SubscriptionRelationshipsWinBackOffers extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsWinBackOffersDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsWinBackOffersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
