<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProvidersResponse
 */
class ScmProvidersResponse extends SpatieData
{
    /**
     * @param  array<int, ScmProvider>  $data
     */
    public function __construct(
        /** @var array<int, ScmProvider> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
