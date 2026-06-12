<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeIdCertificatesLinkagesResponse
 */
class PassTypeIdCertificatesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, PassTypeIdCertificatesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, PassTypeIdCertificatesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
