<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationCreateRequestData
 */
class GameCenterLeaderboardLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardLocalizationCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
