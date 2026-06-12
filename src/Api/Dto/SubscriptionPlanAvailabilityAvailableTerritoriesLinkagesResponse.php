<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesResponse
 */
class SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
