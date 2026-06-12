<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupRelationshipsApp
 */
class BetaGroupRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaGroupRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
