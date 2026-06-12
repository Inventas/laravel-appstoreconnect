<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionsResponse
 */
class CiXcodeVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, CiXcodeVersion>  $data
     * @param  array<int, CiMacOsVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiXcodeVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, CiMacOsVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
