<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageLocalizations
 */
class AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
