<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueCreateRequestDataAttributes
 */
class GameCenterMatchmakingQueueCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional|null  $classicMatchmakingBundleIds
     */
    public function __construct(
        public string $referenceName,
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $classicMatchmakingBundleIds = new Optional,
    ) {}
}
