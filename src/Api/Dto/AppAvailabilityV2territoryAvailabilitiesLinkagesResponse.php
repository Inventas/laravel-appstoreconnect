<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2territoryAvailabilitiesLinkagesResponse
 */
class AppAvailabilityV2territoryAvailabilitiesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAvailabilityV2territoryAvailabilitiesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAvailabilityV2territoryAvailabilitiesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
