<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2createRequestDataAttributes
 */
class GameCenterLeaderboardV2createRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $activityProperties
     */
    public function __construct(
        public GameCenterLeaderboardFormatter $defaultFormatter,
        public string $referenceName,
        public string $vendorIdentifier,
        public string $submissionType,
        public string $scoreSortType,
        public string|Optional|null $scoreRangeStart = new Optional,
        public string|Optional|null $scoreRangeEnd = new Optional,
        public string|Optional|null $recurrenceStartDate = new Optional,
        public string|Optional|null $recurrenceDuration = new Optional,
        public string|Optional|null $recurrenceRule = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $activityProperties = new Optional,
        public string|Optional|null $visibility = new Optional,
    ) {}
}
