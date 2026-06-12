<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2relationshipsImage
 */
class GameCenterLeaderboardLocalizationV2relationshipsImage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardLocalizationV2relationshipsImageData|Optional $data = new Optional,
    ) {}
}
