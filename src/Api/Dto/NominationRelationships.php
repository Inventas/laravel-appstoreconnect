<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationships
 */
class NominationRelationships extends SpatieData
{
    public function __construct(
        public NominationRelationshipsRelatedApps|Optional $relatedApps = new Optional,
        public NominationRelationshipsCreatedByActor|Optional $createdByActor = new Optional,
        public NominationRelationshipsLastModifiedByActor|Optional $lastModifiedByActor = new Optional,
        public NominationRelationshipsSubmittedByActor|Optional $submittedByActor = new Optional,
        public NominationRelationshipsInAppEvents|Optional $inAppEvents = new Optional,
        public NominationRelationshipsSupportedTerritories|Optional $supportedTerritories = new Optional,
    ) {}
}
