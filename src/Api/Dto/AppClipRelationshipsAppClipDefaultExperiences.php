<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipRelationshipsAppClipDefaultExperiences
 */
class AppClipRelationshipsAppClipDefaultExperiences extends SpatieData
{
    /**
     * @param  array<int, AppClipRelationshipsAppClipDefaultExperiencesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppClipRelationshipsAppClipDefaultExperiencesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
