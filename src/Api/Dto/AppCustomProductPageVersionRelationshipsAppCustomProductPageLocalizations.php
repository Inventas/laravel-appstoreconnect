<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionRelationshipsAppCustomProductPageLocalizations
 */
class AppCustomProductPageVersionRelationshipsAppCustomProductPageLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersionRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppCustomProductPageVersionRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
