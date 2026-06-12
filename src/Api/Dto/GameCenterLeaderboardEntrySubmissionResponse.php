<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardEntrySubmissionResponse
 */
class GameCenterLeaderboardEntrySubmissionResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardEntrySubmission $data,
        public DocumentLinks $links,
    ) {}
}
