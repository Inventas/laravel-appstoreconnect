<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBetaFeedbackScreenshotSubmissionsLinkagesResponse
 */
class AppBetaFeedbackScreenshotSubmissionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBetaFeedbackScreenshotSubmissionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBetaFeedbackScreenshotSubmissionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
