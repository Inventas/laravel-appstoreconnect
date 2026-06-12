<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionReleaseCreateRequest
 */
class GameCenterActivityVersionReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseCreateRequestData $data,
    ) {}
}
