<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardEntrySubmissionCreateRequestData
 */
class GameCenterLeaderboardEntrySubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardEntrySubmissionCreateRequestDataAttributes $attributes,
    ) {}
}
