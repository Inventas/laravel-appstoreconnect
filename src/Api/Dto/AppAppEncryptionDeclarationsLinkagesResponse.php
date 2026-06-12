<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppEncryptionDeclarationsLinkagesResponse
 */
class AppAppEncryptionDeclarationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppEncryptionDeclarationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppEncryptionDeclarationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
