<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsSubscriptionLocalizations
 */
class SubscriptionRelationshipsSubscriptionLocalizations extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsSubscriptionLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsSubscriptionLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
