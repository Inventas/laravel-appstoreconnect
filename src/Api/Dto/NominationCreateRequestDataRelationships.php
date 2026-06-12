<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationCreateRequestDataRelationships
 */
class NominationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public NominationCreateRequestDataRelationshipsRelatedApps $relatedApps,
        public NominationCreateRequestDataRelationshipsInAppEvents|Optional $inAppEvents = new Optional,
        public NominationCreateRequestDataRelationshipsSupportedTerritories|Optional $supportedTerritories = new Optional,
    ) {}
}
