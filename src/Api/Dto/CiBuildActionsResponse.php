<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionsResponse
 */
class CiBuildActionsResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildAction>  $data
     * @param  array<int, CiBuildRun>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiBuildAction> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, CiBuildRun>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
