<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetCreateRequestDataAttributes
 */
class GameCenterLeaderboardSetCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public string $vendorIdentifier,
    ) {}
}
