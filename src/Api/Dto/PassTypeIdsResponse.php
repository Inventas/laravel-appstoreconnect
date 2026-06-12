<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeIdsResponse
 */
class PassTypeIdsResponse extends SpatieData
{
    /**
     * @param  array<int, PassTypeId>  $data
     * @param  array<int, Certificate>|Optional  $included
     */
    public function __construct(
        /** @var array<int, PassTypeId> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Certificate>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
