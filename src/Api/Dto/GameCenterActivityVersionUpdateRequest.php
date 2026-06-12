<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionUpdateRequest
 */
class GameCenterActivityVersionUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionUpdateRequestData $data,
    ) {}
}
