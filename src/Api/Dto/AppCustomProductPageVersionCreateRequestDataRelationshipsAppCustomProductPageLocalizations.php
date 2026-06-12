<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageLocalizations
 */
class AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
