<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionsResponse
 */
class GameCenterChallengeVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersion>  $data
     * @param  array<int, GameCenterChallengeImage|GameCenterChallengeLocalization|GameCenterChallengeVersionRelease|GameCenterChallenge>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterChallengeImage|GameCenterChallengeLocalization|GameCenterChallengeVersionRelease|GameCenterChallenge>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
