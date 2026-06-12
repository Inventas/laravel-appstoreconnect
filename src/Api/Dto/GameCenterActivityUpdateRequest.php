<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityUpdateRequest
 */
class GameCenterActivityUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityUpdateRequestData $data,
    ) {}
}
