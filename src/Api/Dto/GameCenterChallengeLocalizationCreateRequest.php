<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationCreateRequest
 */
class GameCenterChallengeLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationCreateRequestData $data,
    ) {}
}
