<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2attributes
 */
class GameCenterLeaderboardV2attributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public GameCenterLeaderboardFormatter|Optional $defaultFormatter = new Optional,
        public string|Optional $referenceName = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
        public string|Optional $submissionType = new Optional,
        public string|Optional $scoreSortType = new Optional,
        public string|Optional $scoreRangeStart = new Optional,
        public string|Optional $scoreRangeEnd = new Optional,
        public string|Optional $recurrenceStartDate = new Optional,
        public string|Optional $recurrenceDuration = new Optional,
        public string|Optional $recurrenceRule = new Optional,
        public bool|Optional $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
        public string|Optional $visibility = new Optional,
    ) {}
}
