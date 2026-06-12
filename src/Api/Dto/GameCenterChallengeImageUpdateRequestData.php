<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeImageUpdateRequestData
 */
class GameCenterChallengeImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterChallengeImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
