<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WinBackOfferUpdateRequest
 */
class WinBackOfferUpdateRequest extends SpatieData
{
    public function __construct(
        public WinBackOfferUpdateRequestData $data,
    ) {}
}
