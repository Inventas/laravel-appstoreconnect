<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PassTypeIdCreateRequest
 */
class PassTypeIdCreateRequest extends SpatieData
{
    public function __construct(
        public PassTypeIdCreateRequestData $data,
    ) {}
}
