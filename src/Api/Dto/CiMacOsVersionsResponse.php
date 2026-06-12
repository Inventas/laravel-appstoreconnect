<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersionsResponse
 */
class CiMacOsVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, CiMacOsVersion>  $data
     * @param  array<int, CiXcodeVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiMacOsVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, CiXcodeVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
