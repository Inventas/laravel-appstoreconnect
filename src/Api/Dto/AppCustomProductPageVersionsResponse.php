<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionsResponse
 */
class AppCustomProductPageVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersion>  $data
     * @param  array<int, AppCustomProductPageLocalization|AppCustomProductPage>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppCustomProductPage>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
