<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationRelationshipsAppPreviewSets
 */
class AppCustomProductPageLocalizationRelationshipsAppPreviewSets extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationRelationshipsAppPreviewSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppCustomProductPageLocalizationRelationshipsAppPreviewSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
