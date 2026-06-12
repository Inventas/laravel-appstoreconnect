<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeRelationshipsOneTimeUseCodes
 */
class SubscriptionOfferCodeRelationshipsOneTimeUseCodes extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeRelationshipsOneTimeUseCodesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionOfferCodeRelationshipsOneTimeUseCodesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
