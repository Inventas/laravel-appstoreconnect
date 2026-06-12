<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationUpdateRequest
 */
class BetaBuildLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationUpdateRequestData $data,
    ) {}
}
