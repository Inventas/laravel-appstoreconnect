<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2createRequestData
 */
class GameCenterLeaderboardLocalizationV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardLocalizationV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardLocalizationV2createRequestDataRelationships $relationships,
    ) {}
}
