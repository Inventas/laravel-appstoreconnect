<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceRelationshipsAppClipDefaultExperienceLocalizations
 */
class AppClipDefaultExperienceRelationshipsAppClipDefaultExperienceLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppClipDefaultExperienceRelationshipsAppClipDefaultExperienceLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppClipDefaultExperienceRelationshipsAppClipDefaultExperienceLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
