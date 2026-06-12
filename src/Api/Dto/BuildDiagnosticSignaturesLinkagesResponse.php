<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildDiagnosticSignaturesLinkagesResponse
 */
class BuildDiagnosticSignaturesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildDiagnosticSignaturesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildDiagnosticSignaturesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
