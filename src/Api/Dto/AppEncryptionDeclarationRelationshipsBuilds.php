<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationRelationshipsBuilds
 */
class AppEncryptionDeclarationRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, AppEncryptionDeclarationRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppEncryptionDeclarationRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
