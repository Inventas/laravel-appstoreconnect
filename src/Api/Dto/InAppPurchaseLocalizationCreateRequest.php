<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationCreateRequest
 */
class InAppPurchaseLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationCreateRequestData $data,
    ) {}
}
