<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2CreateRequest
 */
class GameCenterAchievementV2createRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementVersionV2inlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementV2createRequestData $data,
        /** @var array<int, GameCenterAchievementVersionV2inlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
