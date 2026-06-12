<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationRelationshipsAppScreenshotSets
 */
class AppCustomProductPageLocalizationRelationshipsAppScreenshotSets extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppCustomProductPageLocalizationRelationshipsAppScreenshotSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
