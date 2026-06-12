<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PagingInformationPaging
 */
class PagingInformationPaging extends SpatieData
{
    public function __construct(
        public int $limit,
        public int|Optional $total = new Optional,
        public string|Optional $nextCursor = new Optional,
    ) {}
}
