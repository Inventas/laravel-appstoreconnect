<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductsResponse
 */
class CiProductsResponse extends SpatieData
{
    /**
     * @param  array<int, CiProduct>  $data
     * @param  array<int, App|BundleId|ScmRepository>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiProduct> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|BundleId|ScmRepository>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
