<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailCreateRequest
 */
class GameCenterDetailCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterDetailCreateRequestData $data,
    ) {}
}
