<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseRelationshipsApps
 */
class InAppPurchaseRelationshipsApps extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseRelationshipsAppsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseRelationshipsAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
