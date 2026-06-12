<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DevicesWithoutIncludesResponse
 */
class DevicesWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, Device>  $data
     */
    public function __construct(
        /** @var array<int, Device> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
