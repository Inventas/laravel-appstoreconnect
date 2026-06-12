<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionMacOsVersionsLinkagesResponse
 */
class CiXcodeVersionMacOsVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiXcodeVersionMacOsVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiXcodeVersionMacOsVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
