<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionReleasesResponse
 */
class GameCenterChallengeVersionReleasesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionRelease>  $data
     * @param  array<int, GameCenterChallengeVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterChallengeVersionRelease> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterChallengeVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
