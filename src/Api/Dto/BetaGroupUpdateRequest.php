<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupUpdateRequest
 */
class BetaGroupUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaGroupUpdateRequestData $data,
    ) {}
}
