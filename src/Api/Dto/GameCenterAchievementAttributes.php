<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementAttributes
 */
class GameCenterAchievementAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
        public int|Optional $points = new Optional,
        public bool|Optional $showBeforeEarned = new Optional,
        public bool|Optional $repeatable = new Optional,
        public bool|Optional $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
    ) {}
}
