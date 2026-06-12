<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2createRequestDataAttributes
 */
class GameCenterAchievementV2createRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public string $referenceName,
        public string $vendorIdentifier,
        public int $points,
        public bool $showBeforeEarned,
        public bool $repeatable,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
    ) {}
}
