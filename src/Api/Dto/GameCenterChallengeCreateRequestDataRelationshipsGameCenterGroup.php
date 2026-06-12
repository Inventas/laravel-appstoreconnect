<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationshipsGameCenterGroup
 */
class GameCenterChallengeCreateRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterChallengeCreateRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
