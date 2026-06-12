<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2createRequestDataRelationshipsVersion
 */
class GameCenterLeaderboardSetLocalizationV2createRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2createRequestDataRelationshipsVersionData $data,
    ) {}
}
