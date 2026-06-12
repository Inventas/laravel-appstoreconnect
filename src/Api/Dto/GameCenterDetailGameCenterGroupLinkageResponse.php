<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterGroupLinkageResponse
 */
class GameCenterDetailGameCenterGroupLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterDetailGameCenterGroupLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
