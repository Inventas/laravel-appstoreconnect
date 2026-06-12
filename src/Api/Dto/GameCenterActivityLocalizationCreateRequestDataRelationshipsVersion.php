<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLocalizationCreateRequestDataRelationshipsVersion
 */
class GameCenterActivityLocalizationCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationCreateRequestDataRelationshipsVersionData $data,
    ) {}
}
