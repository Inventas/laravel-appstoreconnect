<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionReleaseCreateRequest
 */
class GameCenterChallengeVersionReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseCreateRequestData $data,
    ) {}
}
