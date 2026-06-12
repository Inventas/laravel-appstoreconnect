<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeImageCreateRequestDataRelationshipsVersion
 */
class GameCenterChallengeImageCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImageCreateRequestDataRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
