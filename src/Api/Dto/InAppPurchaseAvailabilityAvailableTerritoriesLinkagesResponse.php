<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailabilityAvailableTerritoriesLinkagesResponse
 */
class InAppPurchaseAvailabilityAvailableTerritoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseAvailabilityAvailableTerritoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseAvailabilityAvailableTerritoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
