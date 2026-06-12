<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAppStoreVersionLocalizations
 */
class AppStoreVersionRelationshipsAppStoreVersionLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionRelationshipsAppStoreVersionLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionRelationshipsAppStoreVersionLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
