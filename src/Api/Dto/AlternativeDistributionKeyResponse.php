<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionKeyResponse
 */
class AlternativeDistributionKeyResponse extends SpatieData
{
    public function __construct(
        public AlternativeDistributionKey $data,
        public DocumentLinks $links,
    ) {}
}
