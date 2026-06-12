<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleFileSizesResponse
 */
class BuildBundleFileSizesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildBundleFileSize>  $data
     */
    public function __construct(
        /** @var array<int, BuildBundleFileSize> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
