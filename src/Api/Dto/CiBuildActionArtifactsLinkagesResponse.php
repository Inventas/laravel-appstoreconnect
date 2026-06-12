<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionArtifactsLinkagesResponse
 */
class CiBuildActionArtifactsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildActionArtifactsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiBuildActionArtifactsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
