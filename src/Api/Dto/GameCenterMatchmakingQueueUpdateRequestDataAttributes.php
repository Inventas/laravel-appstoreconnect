<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueUpdateRequestDataAttributes
 */
class GameCenterMatchmakingQueueUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional|null  $classicMatchmakingBundleIds
     */
    public function __construct(
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $classicMatchmakingBundleIds = new Optional,
    ) {}
}
