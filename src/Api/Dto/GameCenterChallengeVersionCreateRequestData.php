<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionCreateRequestData
 */
class GameCenterChallengeVersionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterChallengeVersionCreateRequestDataRelationships $relationships,
    ) {}
}
