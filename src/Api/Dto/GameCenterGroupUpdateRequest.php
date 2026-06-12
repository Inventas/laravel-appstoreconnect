<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupUpdateRequest
 */
class GameCenterGroupUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterGroupUpdateRequestData $data,
    ) {}
}
