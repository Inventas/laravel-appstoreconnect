<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterChallengeCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterChallengeCreateRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
