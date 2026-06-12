<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionCreateRequestDataAttributes
 */
class AppCustomProductPageVersionCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $deepLink = new Optional,
    ) {}
}
