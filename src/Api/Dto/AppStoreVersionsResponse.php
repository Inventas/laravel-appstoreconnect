<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionsResponse
 */
class AppStoreVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersion>  $data
     * @param  array<int, AlternativeDistributionPackage|AppClipDefaultExperience|AppStoreReviewDetail|AppStoreVersionExperiment|AppStoreVersionLocalization|AppStoreVersionPhasedRelease|AppStoreVersionSubmission|App|Build|GameCenterAppVersion|RoutingAppCoverage>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AlternativeDistributionPackage|AppClipDefaultExperience|AppStoreReviewDetail|AppStoreVersionExperiment|AppStoreVersionLocalization|AppStoreVersionPhasedRelease|AppStoreVersionSubmission|App|Build|GameCenterAppVersion|RoutingAppCoverage>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
