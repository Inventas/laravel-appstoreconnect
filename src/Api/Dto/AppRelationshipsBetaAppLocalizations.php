<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsBetaAppLocalizations
 */
class AppRelationshipsBetaAppLocalizations extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsBetaAppLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsBetaAppLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
