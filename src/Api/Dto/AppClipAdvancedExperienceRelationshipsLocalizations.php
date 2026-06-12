<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceRelationshipsLocalizations
 */
class AppClipAdvancedExperienceRelationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppClipAdvancedExperienceRelationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppClipAdvancedExperienceRelationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
