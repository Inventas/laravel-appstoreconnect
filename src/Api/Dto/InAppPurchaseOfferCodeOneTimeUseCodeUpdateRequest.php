<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest
 */
class InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequestData $data,
    ) {}
}
