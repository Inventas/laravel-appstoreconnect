<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionsLinkagesResponse
 */
class BackgroundAssetVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BackgroundAssetVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
