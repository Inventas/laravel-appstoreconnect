<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLocalizationCreateRequestData
 */
class GameCenterActivityLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterActivityLocalizationCreateRequestDataAttributes $attributes,
        public GameCenterActivityLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
