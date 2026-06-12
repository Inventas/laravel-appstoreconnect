<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileCreateRequestDataAttributes
 */
class ProfileCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string $profileType,
    ) {}
}
