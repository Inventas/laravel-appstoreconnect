<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationUpdateRequest
 */
class GameCenterChallengeLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationUpdateRequestData $data,
    ) {}
}
