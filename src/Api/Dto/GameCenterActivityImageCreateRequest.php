<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityImageCreateRequest
 */
class GameCenterActivityImageCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityImageCreateRequestData $data,
    ) {}
}
