<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaNotificationCreateRequestDataRelationships
 */
class BuildBetaNotificationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BuildBetaNotificationCreateRequestDataRelationshipsBuild $build,
    ) {}
}
