<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupRelationshipsSubscriptionGroupLocalizations
 */
class SubscriptionGroupRelationshipsSubscriptionGroupLocalizations extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroupRelationshipsSubscriptionGroupLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionGroupRelationshipsSubscriptionGroupLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
