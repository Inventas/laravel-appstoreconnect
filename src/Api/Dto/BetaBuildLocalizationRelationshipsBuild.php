<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationRelationshipsBuild
 */
class BetaBuildLocalizationRelationshipsBuild extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaBuildLocalizationRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
