<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * NominationCreateRequest
 */
class NominationCreateRequest extends SpatieData
{
    public function __construct(
        public NominationCreateRequestData $data,
    ) {}
}
