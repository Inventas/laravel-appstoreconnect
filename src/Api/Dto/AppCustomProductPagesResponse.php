<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPagesResponse
 */
class AppCustomProductPagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPage>  $data
     * @param  array<int, AppCustomProductPageLocalization|AppCustomProductPageVersion|App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppCustomProductPage> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppCustomProductPageVersion|App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
