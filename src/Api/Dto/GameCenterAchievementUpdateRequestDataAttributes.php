<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementUpdateRequestDataAttributes
 */
class GameCenterAchievementUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
        public int|Optional|null $points = new Optional,
        public bool|Optional|null $showBeforeEarned = new Optional,
        public bool|Optional|null $repeatable = new Optional,
        public bool|Optional|null $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
    ) {}
}
