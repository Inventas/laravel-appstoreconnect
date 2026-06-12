<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSetImage
 */
class GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSetImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSetImageData|Optional $data = new Optional,
    ) {}
}
