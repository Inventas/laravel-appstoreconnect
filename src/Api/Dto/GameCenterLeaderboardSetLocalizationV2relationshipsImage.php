<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2relationshipsImage
 */
class GameCenterLeaderboardSetLocalizationV2relationshipsImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardSetLocalizationV2relationshipsImageData|Optional $data = new Optional,
    ) {}
}
