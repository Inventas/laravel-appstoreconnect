<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLocalizationUpdateRequest
 */
class GameCenterActivityLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationUpdateRequestData $data,
    ) {}
}
