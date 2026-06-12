<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationCreateRequestDataAttributes
 */
class GameCenterChallengeLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public string|Optional|null $description = new Optional,
    ) {}
}
