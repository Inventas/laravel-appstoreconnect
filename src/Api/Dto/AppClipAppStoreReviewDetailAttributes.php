<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailAttributes
 */
class AppClipAppStoreReviewDetailAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $invocationUrls
     */
    public function __construct(
        /** @var array<int, string>|Optional */
        public array|Optional $invocationUrls = new Optional,
    ) {}
}
