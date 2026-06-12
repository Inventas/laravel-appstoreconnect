<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PassTypeIdCreateRequestDataAttributes
 */
class PassTypeIdCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string $identifier,
    ) {}
}
