<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SandboxTestersV2Response
 */
class SandboxTestersV2response extends SpatieData
{
    /**
     * @param  array<int, SandboxTesterV2>  $data
     */
    public function __construct(
        /** @var array<int, SandboxTesterV2> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
