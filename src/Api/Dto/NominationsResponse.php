<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationsResponse
 */
class NominationsResponse extends SpatieData
{
    /**
     * @param  array<int, Nomination>  $data
     * @param  array<int, Actor|AppEvent|App|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, Nomination> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Actor|AppEvent|App|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
