<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupCreateRequest
 */
class GameCenterGroupCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterGroupCreateRequestData $data,
    ) {}
}
