<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityImageResponse
 */
class GameCenterActivityImageResponse extends SpatieData
{
    public function __construct(
        public GameCenterActivityImage $data,
        public DocumentLinks $links,
    ) {}
}
