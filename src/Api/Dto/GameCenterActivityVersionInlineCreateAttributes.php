<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionInlineCreateAttributes
 */
class GameCenterActivityVersionInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $fallbackUrl = new Optional,
    ) {}
}
