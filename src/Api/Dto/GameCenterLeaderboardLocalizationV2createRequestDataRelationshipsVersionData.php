<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersionData
 */
class GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
