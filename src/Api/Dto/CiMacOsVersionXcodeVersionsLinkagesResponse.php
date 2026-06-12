<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersionXcodeVersionsLinkagesResponse
 */
class CiMacOsVersionXcodeVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiMacOsVersionXcodeVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiMacOsVersionXcodeVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
