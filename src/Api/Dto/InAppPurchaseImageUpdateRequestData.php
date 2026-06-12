<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImageUpdateRequestData
 */
class InAppPurchaseImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
