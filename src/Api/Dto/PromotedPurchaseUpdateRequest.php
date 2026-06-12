<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PromotedPurchaseUpdateRequest
 */
class PromotedPurchaseUpdateRequest extends SpatieData
{
    public function __construct(
        public PromotedPurchaseUpdateRequestData $data,
    ) {}
}
