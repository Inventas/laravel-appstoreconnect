<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeImageCreateRequest
 */
class GameCenterChallengeImageCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImageCreateRequestData $data,
    ) {}
}
