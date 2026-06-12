<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestRequestInlineCreateAttributes
 */
class GameCenterMatchmakingTestRequestInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $requestName = new Optional,
        public int|Optional $secondsInQueue = new Optional,
        public string|Optional|null $locale = new Optional,
        public Location|Optional $location = new Optional,
        public int|Optional|null $minPlayers = new Optional,
        public int|Optional|null $maxPlayers = new Optional,
        public int|Optional|null $playerCount = new Optional,
        public string|Optional $bundleId = new Optional,
        public Platform|Optional $platform = new Optional,
        public string|Optional $appVersion = new Optional,
    ) {}
}
