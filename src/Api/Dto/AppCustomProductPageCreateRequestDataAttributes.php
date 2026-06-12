<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageCreateRequestDataAttributes
 */
class AppCustomProductPageCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
    ) {}
}
