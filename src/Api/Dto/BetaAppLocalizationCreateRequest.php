<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppLocalizationCreateRequest
 */
class BetaAppLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public BetaAppLocalizationCreateRequestData $data,
    ) {}
}
