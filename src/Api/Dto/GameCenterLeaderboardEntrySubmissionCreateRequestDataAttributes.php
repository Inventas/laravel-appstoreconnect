<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardEntrySubmissionCreateRequestDataAttributes
 */
class GameCenterLeaderboardEntrySubmissionCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional|null  $challengeIds
     */
    public function __construct(
        public string $bundleId,
        public string $scopedPlayerId,
        public string $score,
        public string $vendorIdentifier,
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $challengeIds = new Optional,
        public string|Optional|null $context = new Optional,
        public string|Optional|null $submittedDate = new Optional,
        public bool|Optional|null $preReleased = new Optional,
    ) {}
}
