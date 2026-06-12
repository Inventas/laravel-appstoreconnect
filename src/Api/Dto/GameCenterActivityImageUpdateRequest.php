<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityImageUpdateRequest
 */
class GameCenterActivityImageUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityImageUpdateRequestData $data,
    ) {}
}
