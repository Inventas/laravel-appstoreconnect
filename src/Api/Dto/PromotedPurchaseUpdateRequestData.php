<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseUpdateRequestData
 */
class PromotedPurchaseUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public PromotedPurchaseUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
