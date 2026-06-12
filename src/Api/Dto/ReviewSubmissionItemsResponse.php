<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemsResponse
 */
class ReviewSubmissionItemsResponse extends SpatieData
{
    /**
     * @param  array<int, ReviewSubmissionItem>  $data
     * @param  array<int, AppCustomProductPageVersion|AppEvent|AppStoreVersionExperiment|AppStoreVersion|BackgroundAssetVersion|GameCenterAchievementVersionV2|GameCenterActivityVersion|GameCenterChallengeVersion|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, ReviewSubmissionItem> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageVersion|AppEvent|AppStoreVersionExperiment|AppStoreVersion|BackgroundAssetVersion|GameCenterAchievementVersionV2|GameCenterActivityVersion|GameCenterChallengeVersion|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
