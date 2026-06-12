<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequest
 */
class GameCenterChallengeCreateRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeVersionInlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterChallengeCreateRequestData $data,
        /** @var array<int, GameCenterChallengeVersionInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
