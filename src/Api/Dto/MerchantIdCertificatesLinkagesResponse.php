<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdCertificatesLinkagesResponse
 */
class MerchantIdCertificatesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, MerchantIdCertificatesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, MerchantIdCertificatesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
