<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotsResponse
 */
class AppScreenshotsResponse extends SpatieData
{
    /**
     * @param  array<int, AppScreenshot>  $data
     * @param  array<int, AppScreenshotSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppScreenshot> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppScreenshotSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
