<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationRelationshipsAppScreenshotSets
 */
class AppStoreVersionLocalizationRelationshipsAppScreenshotSets extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreVersionLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
