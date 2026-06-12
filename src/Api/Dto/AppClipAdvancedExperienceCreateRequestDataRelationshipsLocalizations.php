<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceCreateRequestDataRelationshipsLocalizations
 */
class AppClipAdvancedExperienceCreateRequestDataRelationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperienceCreateRequestDataRelationshipsLocalizationsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppClipAdvancedExperienceCreateRequestDataRelationshipsLocalizationsDataItem> */
        public array $data,
    ) {}
}
