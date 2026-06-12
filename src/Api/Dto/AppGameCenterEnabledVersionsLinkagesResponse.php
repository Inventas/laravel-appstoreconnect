<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppGameCenterEnabledVersionsLinkagesResponse
 */
class AppGameCenterEnabledVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppGameCenterEnabledVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppGameCenterEnabledVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
