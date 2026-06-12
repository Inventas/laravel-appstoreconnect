<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PassTypeIdCreateRequestData
 */
class PassTypeIdCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public PassTypeIdCreateRequestDataAttributes $attributes,
    ) {}
}
