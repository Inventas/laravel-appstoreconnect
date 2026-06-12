<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationCreateRequestDataRelationshipsVersion
 */
class GameCenterChallengeLocalizationCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationCreateRequestDataRelationshipsVersionData $data,
    ) {}
}
