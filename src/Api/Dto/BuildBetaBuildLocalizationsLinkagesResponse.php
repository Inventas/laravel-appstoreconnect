<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaBuildLocalizationsLinkagesResponse
 */
class BuildBetaBuildLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildBetaBuildLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildBetaBuildLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
