<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataAttributes
 */
class GameCenterChallengeCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public string $vendorIdentifier,
        public string $challengeType,
        public bool|Optional|null $repeatable = new Optional,
    ) {}
}
