<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueAttributes
 */
class GameCenterMatchmakingQueueAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $classicMatchmakingBundleIds
     */
    public function __construct(
        public string|Optional $referenceName = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $classicMatchmakingBundleIds = new Optional,
    ) {}
}
