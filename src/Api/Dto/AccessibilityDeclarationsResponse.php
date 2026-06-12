<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AccessibilityDeclarationsResponse
 */
class AccessibilityDeclarationsResponse extends SpatieData
{
    /**
     * @param  array<int, AccessibilityDeclaration>  $data
     */
    public function __construct(
        /** @var array<int, AccessibilityDeclaration> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
