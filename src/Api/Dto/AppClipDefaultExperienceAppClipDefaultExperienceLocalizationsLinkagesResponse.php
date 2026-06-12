<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceAppClipDefaultExperienceLocalizationsLinkagesResponse
 */
class AppClipDefaultExperienceAppClipDefaultExperienceLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperienceAppClipDefaultExperienceLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppClipDefaultExperienceAppClipDefaultExperienceLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
