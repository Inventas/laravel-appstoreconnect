<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseLocalizationUpdateRequestData
 */
class InAppPurchaseLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
