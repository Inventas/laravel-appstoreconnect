<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeResponse
 */
class GameCenterChallengeResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterChallenge $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterChallengeVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
