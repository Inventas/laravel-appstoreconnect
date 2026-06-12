<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PagedDocumentLinks
 */
class PagedDocumentLinks extends SpatieData
{
    public function __construct(
        public string $self,
        public string|Optional $first = new Optional,
        public string|Optional $next = new Optional,
    ) {}
}
