<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetAppScreenshotsLinkagesResponse
 */
class AppScreenshotSetAppScreenshotsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppScreenshotSetAppScreenshotsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppScreenshotSetAppScreenshotsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
