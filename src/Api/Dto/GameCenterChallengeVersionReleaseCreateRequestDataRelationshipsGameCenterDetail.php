<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsGameCenterDetailData $data,
    ) {}
}
