<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeImageUpdateRequest
 */
class GameCenterChallengeImageUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImageUpdateRequestData $data,
    ) {}
}
