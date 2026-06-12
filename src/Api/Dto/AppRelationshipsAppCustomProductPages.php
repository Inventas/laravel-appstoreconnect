<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppCustomProductPages
 */
class AppRelationshipsAppCustomProductPages extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAppCustomProductPagesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAppCustomProductPagesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
