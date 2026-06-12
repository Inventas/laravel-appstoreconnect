<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppClipAdvancedExperiencesLinkagesResponse
 */
class AppClipAppClipAdvancedExperiencesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipAppClipAdvancedExperiencesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppClipAppClipAdvancedExperiencesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
