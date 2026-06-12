<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeUpdateRequestDataAttributes
 */
class GameCenterChallengeUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
        public bool|Optional|null $archived = new Optional,
        public bool|Optional|null $repeatable = new Optional,
    ) {}
}
