<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsAppInfoLocalizations
 */
class AppInfoRelationshipsAppInfoLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppInfoRelationshipsAppInfoLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppInfoRelationshipsAppInfoLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
