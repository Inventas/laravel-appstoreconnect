<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionReleaseResponse
 */
class GameCenterChallengeVersionReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersion>|Optional  $included
     */
    public function __construct(
        public GameCenterChallengeVersionRelease $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterChallengeVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
