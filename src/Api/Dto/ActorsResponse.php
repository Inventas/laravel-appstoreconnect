<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ActorsResponse
 */
class ActorsResponse extends SpatieData
{
    /**
     * @param  array<int, Actor>  $data
     */
    public function __construct(
        /** @var array<int, Actor> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
