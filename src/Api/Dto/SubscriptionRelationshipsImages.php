<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsImages
 */
class SubscriptionRelationshipsImages extends SpatieData
{
    /**
     * @param  array<int, SubscriptionRelationshipsImagesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionRelationshipsImagesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
