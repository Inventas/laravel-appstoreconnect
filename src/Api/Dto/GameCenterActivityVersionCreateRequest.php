<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionCreateRequest
 */
class GameCenterActivityVersionCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionCreateRequestData $data,
    ) {}
}
