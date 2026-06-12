<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailCreateRequestDataRelationshipsApp
 */
class GameCenterDetailCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public GameCenterDetailCreateRequestDataRelationshipsAppData $data,
    ) {}
}
