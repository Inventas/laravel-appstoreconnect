<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionCreateRequest
 */
class GameCenterChallengeVersionCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionCreateRequestData $data,
    ) {}
}
