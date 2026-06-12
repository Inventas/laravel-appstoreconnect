<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterPlayerAchievementSubmissionAttributes
 */
class GameCenterPlayerAchievementSubmissionAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $challengeIds
     */
    public function __construct(
        public string|Optional $bundleId = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $challengeIds = new Optional,
        public int|Optional $percentageAchieved = new Optional,
        public string|Optional $scopedPlayerId = new Optional,
        public string|Optional $submittedDate = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
        public bool|Optional $preReleased = new Optional,
    ) {}
}
