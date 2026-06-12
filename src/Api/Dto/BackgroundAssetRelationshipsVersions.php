<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationshipsVersions
 */
class BackgroundAssetRelationshipsVersions extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
    ) {}
}
