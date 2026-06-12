<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDomainStatusResponse
 */
class AppClipDomainStatusResponse extends SpatieData
{
    public function __construct(
        public AppClipDomainStatus $data,
        public DocumentLinks $links,
    ) {}
}
