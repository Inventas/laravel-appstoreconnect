<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceResponse
 */
class AppClipDefaultExperienceResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipAppStoreReviewDetail|AppClipDefaultExperienceLocalization|AppClip|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        public AppClipDefaultExperience $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipAppStoreReviewDetail|AppClipDefaultExperienceLocalization|AppClip|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
