<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailUpdateRequestDataAttributes
 */
class AppClipAppStoreReviewDetailUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional|null  $invocationUrls
     */
    public function __construct(
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $invocationUrls = new Optional,
    ) {}
}
