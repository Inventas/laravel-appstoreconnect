<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionResponse
 */
class AppStoreVersionResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackage|AppClipDefaultExperience|AppStoreReviewDetail|AppStoreVersionExperiment|AppStoreVersionLocalization|AppStoreVersionPhasedRelease|AppStoreVersionSubmission|App|Build|GameCenterAppVersion|RoutingAppCoverage>|Optional  $included
     */
    public function __construct(
        public AppStoreVersion $data,
        public DocumentLinks $links,
        /** @var array<int, AlternativeDistributionPackage|AppClipDefaultExperience|AppStoreReviewDetail|AppStoreVersionExperiment|AppStoreVersionLocalization|AppStoreVersionPhasedRelease|AppStoreVersionSubmission|App|Build|GameCenterAppVersion|RoutingAppCoverage>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
