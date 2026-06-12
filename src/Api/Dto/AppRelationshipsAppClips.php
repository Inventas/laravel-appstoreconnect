<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppClips
 */
class AppRelationshipsAppClips extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAppClipsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAppClipsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
