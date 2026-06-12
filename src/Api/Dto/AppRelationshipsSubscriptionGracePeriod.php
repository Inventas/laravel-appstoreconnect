<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsSubscriptionGracePeriod
 */
class AppRelationshipsSubscriptionGracePeriod extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppRelationshipsSubscriptionGracePeriodData|Optional $data = new Optional,
    ) {}
}
