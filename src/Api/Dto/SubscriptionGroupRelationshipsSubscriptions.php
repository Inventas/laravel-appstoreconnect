<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupRelationshipsSubscriptions
 */
class SubscriptionGroupRelationshipsSubscriptions extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroupRelationshipsSubscriptionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionGroupRelationshipsSubscriptionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
