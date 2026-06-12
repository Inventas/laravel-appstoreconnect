<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppEvents
 */
class AppRelationshipsAppEvents extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAppEventsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAppEventsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
