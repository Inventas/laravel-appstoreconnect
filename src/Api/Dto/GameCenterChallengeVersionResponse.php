<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionResponse
 */
class GameCenterChallengeVersionResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeImage|GameCenterChallengeLocalization|GameCenterChallengeVersionRelease|GameCenterChallenge>|Optional  $included
     */
    public function __construct(
        public GameCenterChallengeVersion $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterChallengeImage|GameCenterChallengeLocalization|GameCenterChallengeVersionRelease|GameCenterChallenge>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
