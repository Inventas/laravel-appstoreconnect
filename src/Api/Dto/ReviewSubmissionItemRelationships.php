<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationships
 */
class ReviewSubmissionItemRelationships extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public ReviewSubmissionItemRelationshipsAppCustomProductPageVersion|Optional $appCustomProductPageVersion = new Optional,
        public ReviewSubmissionItemRelationshipsAppStoreVersionExperiment|Optional $appStoreVersionExperiment = new Optional,
        public ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2|Optional $appStoreVersionExperimentV2 = new Optional,
        public ReviewSubmissionItemRelationshipsAppEvent|Optional $appEvent = new Optional,
        public ReviewSubmissionItemRelationshipsBackgroundAssetVersion|Optional $backgroundAssetVersion = new Optional,
        public ReviewSubmissionItemRelationshipsGameCenterAchievementVersion|Optional $gameCenterAchievementVersion = new Optional,
        public ReviewSubmissionItemRelationshipsGameCenterActivityVersion|Optional $gameCenterActivityVersion = new Optional,
        public ReviewSubmissionItemRelationshipsGameCenterChallengeVersion|Optional $gameCenterChallengeVersion = new Optional,
        public ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersion|Optional $gameCenterLeaderboardSetVersion = new Optional,
        public ReviewSubmissionItemRelationshipsGameCenterLeaderboardVersion|Optional $gameCenterLeaderboardVersion = new Optional,
    ) {}
}
