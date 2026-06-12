<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengesResponse
 */
class GameCenterChallengesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallenge>  $data
     * @param  array<int, GameCenterChallengeVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterChallenge> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterChallengeVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
