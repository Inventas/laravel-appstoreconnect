<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBetaAppLocalizationsLinkagesResponse
 */
class AppBetaAppLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBetaAppLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBetaAppLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
