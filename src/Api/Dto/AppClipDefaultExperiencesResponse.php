<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperiencesResponse
 */
class AppClipDefaultExperiencesResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperience>  $data
     * @param  array<int, AppClipAppStoreReviewDetail|AppClipDefaultExperienceLocalization|AppClip|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppClipDefaultExperience> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppClipAppStoreReviewDetail|AppClipDefaultExperienceLocalization|AppClip|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
