<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiArtifactResponse
 */
class CiArtifactResponse extends SpatieData
{
    public function __construct(
        public CiArtifact $data,
        public DocumentLinks $links,
    ) {}
}
