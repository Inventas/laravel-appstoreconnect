<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardEntrySubmissionCreateRequest
 */
class GameCenterLeaderboardEntrySubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardEntrySubmissionCreateRequestData $data,
    ) {}
}
