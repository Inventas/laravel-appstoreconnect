<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImagesResponse
 */
class InAppPurchaseImagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseImage>  $data
     * @param  array<int, InAppPurchaseV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, InAppPurchaseImage> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, InAppPurchaseV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
