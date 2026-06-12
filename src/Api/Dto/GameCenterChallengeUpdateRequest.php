<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeUpdateRequest
 */
class GameCenterChallengeUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeUpdateRequestData $data,
    ) {}
}
