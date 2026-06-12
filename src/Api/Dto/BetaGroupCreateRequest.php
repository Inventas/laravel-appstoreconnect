<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupCreateRequest
 */
class BetaGroupCreateRequest extends SpatieData
{
    public function __construct(
        public BetaGroupCreateRequestData $data,
    ) {}
}
