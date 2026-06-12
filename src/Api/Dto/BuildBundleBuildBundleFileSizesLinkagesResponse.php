<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleBuildBundleFileSizesLinkagesResponse
 */
class BuildBundleBuildBundleFileSizesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildBundleBuildBundleFileSizesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildBundleBuildBundleFileSizesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
