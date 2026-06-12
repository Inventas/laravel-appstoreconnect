<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationCreateRequest
 */
class BetaBuildLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationCreateRequestData $data,
    ) {}
}
