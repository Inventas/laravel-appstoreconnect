<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsActivity
 */
class GameCenterLeaderboardV2relationshipsActivity extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardV2relationshipsActivityData|Optional $data = new Optional,
    ) {}
}
