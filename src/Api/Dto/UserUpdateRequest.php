<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserUpdateRequest
 */
class UserUpdateRequest extends SpatieData
{
    public function __construct(
        public UserUpdateRequestData $data,
    ) {}
}
