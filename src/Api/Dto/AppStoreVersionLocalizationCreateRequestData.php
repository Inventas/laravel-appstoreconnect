<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationCreateRequestData
 */
class AppStoreVersionLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionLocalizationCreateRequestDataAttributes $attributes,
        public AppStoreVersionLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
