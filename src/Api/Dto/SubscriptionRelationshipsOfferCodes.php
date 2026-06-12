<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsOfferCodes
 */
class SubscriptionRelationshipsOfferCodes extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsOfferCodesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsOfferCodesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
