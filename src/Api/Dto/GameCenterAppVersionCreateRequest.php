<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionCreateRequest
 */
class GameCenterAppVersionCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAppVersionCreateRequestData $data,
    ) {}
}
