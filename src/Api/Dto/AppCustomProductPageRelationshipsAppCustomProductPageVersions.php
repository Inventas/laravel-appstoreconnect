<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageRelationshipsAppCustomProductPageVersions
 */
class AppCustomProductPageRelationshipsAppCustomProductPageVersions extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageRelationshipsAppCustomProductPageVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppCustomProductPageRelationshipsAppCustomProductPageVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
