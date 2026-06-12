<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiArtifactsResponse
 */
class CiArtifactsResponse extends SpatieData
{
    /**
     * @param  array<int, CiArtifact>  $data
     */
    public function __construct(
        /** @var array<int, CiArtifact> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
