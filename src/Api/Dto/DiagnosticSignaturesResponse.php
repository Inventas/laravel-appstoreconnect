<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticSignaturesResponse
 */
class DiagnosticSignaturesResponse extends SpatieData
{
    /**
     * @param  array<int, DiagnosticSignature>  $data
     */
    public function __construct(
        /** @var array<int, DiagnosticSignature> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
