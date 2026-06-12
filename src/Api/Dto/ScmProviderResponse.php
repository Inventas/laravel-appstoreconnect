<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ScmProviderResponse
 */
class ScmProviderResponse extends SpatieData
{
    public function __construct(
        public ScmProvider $data,
        public DocumentLinks $links,
    ) {}
}
