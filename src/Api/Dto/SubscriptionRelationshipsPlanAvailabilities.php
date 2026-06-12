<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsPlanAvailabilities
 */
class SubscriptionRelationshipsPlanAvailabilities extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsPlanAvailabilitiesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsPlanAvailabilitiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
