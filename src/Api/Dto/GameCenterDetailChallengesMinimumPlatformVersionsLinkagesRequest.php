<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest
 */
class GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
