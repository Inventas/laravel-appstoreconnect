<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationUpdateRequestDataRelationships
 */
class NominationUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public NominationUpdateRequestDataRelationshipsRelatedApps|Optional $relatedApps = new Optional,
        public NominationUpdateRequestDataRelationshipsInAppEvents|Optional $inAppEvents = new Optional,
        public NominationUpdateRequestDataRelationshipsSupportedTerritories|Optional $supportedTerritories = new Optional,
    ) {}
}
