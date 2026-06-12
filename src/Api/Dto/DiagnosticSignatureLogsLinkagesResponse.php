<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticSignatureLogsLinkagesResponse
 */
class DiagnosticSignatureLogsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, DiagnosticSignatureLogsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, DiagnosticSignatureLogsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
