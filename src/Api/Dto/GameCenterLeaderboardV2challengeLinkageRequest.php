<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2challengeLinkageRequest
 */
class GameCenterLeaderboardV2challengeLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2challengeLinkageRequestData $data,
    ) {}
}
