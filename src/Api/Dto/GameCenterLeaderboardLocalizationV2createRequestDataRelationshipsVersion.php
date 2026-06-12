<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersion
 */
class GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersionData $data,
    ) {}
}
