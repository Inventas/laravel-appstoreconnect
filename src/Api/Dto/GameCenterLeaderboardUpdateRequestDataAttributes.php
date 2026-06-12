<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardUpdateRequestDataAttributes
 */
class GameCenterLeaderboardUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public GameCenterLeaderboardFormatter|Optional $defaultFormatter = new Optional,
        public string|Optional|null $referenceName = new Optional,
        public string|Optional|null $submissionType = new Optional,
        public string|Optional|null $scoreSortType = new Optional,
        public string|Optional|null $scoreRangeStart = new Optional,
        public string|Optional|null $scoreRangeEnd = new Optional,
        public string|Optional|null $recurrenceStartDate = new Optional,
        public string|Optional|null $recurrenceDuration = new Optional,
        public string|Optional|null $recurrenceRule = new Optional,
        public bool|Optional|null $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
        public string|Optional|null $visibility = new Optional,
    ) {}
}
