<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBetaFeedbackCrashSubmissionsLinkagesResponse
 */
class AppBetaFeedbackCrashSubmissionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBetaFeedbackCrashSubmissionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBetaFeedbackCrashSubmissionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
