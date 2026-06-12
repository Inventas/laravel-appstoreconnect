<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2updateRequestData
 */
class InAppPurchaseV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
