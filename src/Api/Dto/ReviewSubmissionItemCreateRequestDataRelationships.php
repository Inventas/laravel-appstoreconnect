<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationships
 */
class ReviewSubmissionItemCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsReviewSubmission $reviewSubmission,
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppCustomProductPageVersion|Optional $appCustomProductPageVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperiment|Optional $appStoreVersionExperiment = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2|Optional $appStoreVersionExperimentV2 = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppEvent|Optional $appEvent = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsBackgroundAssetVersion|Optional $backgroundAssetVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterAchievementVersion|Optional $gameCenterAchievementVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterActivityVersion|Optional $gameCenterActivityVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterChallengeVersion|Optional $gameCenterChallengeVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardSetVersion|Optional $gameCenterLeaderboardSetVersion = new Optional,
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardVersion|Optional $gameCenterLeaderboardVersion = new Optional,
    ) {}
}
