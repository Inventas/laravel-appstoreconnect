<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailUpdateRequest
 */
class GameCenterDetailUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestData $data,
    ) {}
}
