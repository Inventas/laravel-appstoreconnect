<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsApp
 */
class BuildRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
