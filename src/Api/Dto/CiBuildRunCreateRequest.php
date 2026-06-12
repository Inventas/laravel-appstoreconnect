<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiBuildRunCreateRequest
 */
class CiBuildRunCreateRequest extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestData $data,
    ) {}
}
