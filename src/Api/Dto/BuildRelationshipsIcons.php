<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsIcons
 */
class BuildRelationshipsIcons extends SpatieData
{
    /**
     * @param  array<int, BuildRelationshipsIconsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildRelationshipsIconsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
