<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsIntroductoryOffers
 */
class SubscriptionRelationshipsIntroductoryOffers extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsIntroductoryOffersDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsIntroductoryOffersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
