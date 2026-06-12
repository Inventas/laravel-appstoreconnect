<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppClipDefaultExperiencesLinkagesResponse
 */
class AppClipAppClipDefaultExperiencesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipAppClipDefaultExperiencesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppClipAppClipDefaultExperiencesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
