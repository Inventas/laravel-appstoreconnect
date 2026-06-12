<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailResponse
 */
class AppStoreReviewDetailResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreReviewAttachment|AppStoreVersion>|Optional  $included
     */
    public function __construct(
        public AppStoreReviewDetail $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreReviewAttachment|AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
