<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PassTypeIdUpdateRequest
 */
class PassTypeIdUpdateRequest extends SpatieData
{
    public function __construct(
        public PassTypeIdUpdateRequestData $data,
    ) {}
}
