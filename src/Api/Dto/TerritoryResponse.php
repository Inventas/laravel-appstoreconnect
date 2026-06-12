<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * TerritoryResponse
 */
class TerritoryResponse extends SpatieData
{
    public function __construct(
        public Territory $data,
        public DocumentLinks $links,
    ) {}
}
