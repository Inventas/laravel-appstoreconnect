<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemResponse
 */
class ReviewSubmissionItemResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersion|AppEvent|AppStoreVersionExperiment|AppStoreVersion|BackgroundAssetVersion|GameCenterAchievementVersionV2|GameCenterActivityVersion|GameCenterChallengeVersion|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        public ReviewSubmissionItem $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageVersion|AppEvent|AppStoreVersionExperiment|AppStoreVersion|BackgroundAssetVersion|GameCenterAchievementVersionV2|GameCenterActivityVersion|GameCenterChallengeVersion|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
