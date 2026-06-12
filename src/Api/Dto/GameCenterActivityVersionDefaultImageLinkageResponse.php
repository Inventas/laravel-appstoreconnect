<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionDefaultImageLinkageResponse
 */
class GameCenterActivityVersionDefaultImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionDefaultImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
