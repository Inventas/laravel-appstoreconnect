<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseRelationships
 */
class InAppPurchaseRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseRelationshipsApps|Optional $apps = new Optional,
    ) {}
}
