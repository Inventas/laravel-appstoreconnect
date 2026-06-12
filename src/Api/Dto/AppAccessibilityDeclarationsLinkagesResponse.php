<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAccessibilityDeclarationsLinkagesResponse
 */
class AppAccessibilityDeclarationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAccessibilityDeclarationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAccessibilityDeclarationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
