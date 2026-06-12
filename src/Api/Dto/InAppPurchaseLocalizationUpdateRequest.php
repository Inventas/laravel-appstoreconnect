<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationUpdateRequest
 */
class InAppPurchaseLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationUpdateRequestData $data,
    ) {}
}
