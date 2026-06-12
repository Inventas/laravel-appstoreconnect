<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterCreateRequestDataAttributes
 */
class BetaTesterCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $email,
        public string|Optional|null $firstName = new Optional,
        public string|Optional|null $lastName = new Optional,
    ) {}
}
