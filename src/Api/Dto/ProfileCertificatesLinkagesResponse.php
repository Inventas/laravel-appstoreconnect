<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileCertificatesLinkagesResponse
 */
class ProfileCertificatesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ProfileCertificatesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ProfileCertificatesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
