<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationshipsGameCenterGroup
 */
class GameCenterChallengeRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterChallengeRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
