<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetsResponse
 */
class BackgroundAssetsResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAsset>  $data
     * @param  array<int, App|BackgroundAssetVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BackgroundAsset> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|BackgroundAssetVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
