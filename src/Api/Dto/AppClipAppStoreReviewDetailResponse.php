<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailResponse
 */
class AppClipAppStoreReviewDetailResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperience>|Optional  $included
     */
    public function __construct(
        public AppClipAppStoreReviewDetail $data,
        public DocumentLinks $links,
        /** @var array<int, AppClipDefaultExperience>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
