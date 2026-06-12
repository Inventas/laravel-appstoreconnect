<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageCreateRequestDataAttributes
 */
class GameCenterLeaderboardSetImageCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
    ) {}
}
