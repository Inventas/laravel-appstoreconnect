<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileCreateRequest
 */
class ProfileCreateRequest extends SpatieData
{
    public function __construct(
        public ProfileCreateRequestData $data,
    ) {}
}
