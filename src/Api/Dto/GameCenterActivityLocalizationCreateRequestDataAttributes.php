<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalizationCreateRequestDataAttributes
 */
class GameCenterActivityLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public string|Optional|null $description = new Optional,
    ) {}
}
