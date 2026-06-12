<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailabilityAvailableTerritoriesLinkagesResponse
 */
class SubscriptionAvailabilityAvailableTerritoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionAvailabilityAvailableTerritoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionAvailabilityAvailableTerritoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
