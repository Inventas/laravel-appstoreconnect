<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeAttributes
 */
class GameCenterChallengeAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
        public bool|Optional $archived = new Optional,
        public string|Optional $challengeType = new Optional,
        public bool|Optional $repeatable = new Optional,
    ) {}
}
