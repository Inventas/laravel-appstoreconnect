<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementRelationshipsTerritories
 */
class EndUserLicenseAgreementRelationshipsTerritories extends SpatieData
{
    /**
     * @param  array<int, EndUserLicenseAgreementRelationshipsTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, EndUserLicenseAgreementRelationshipsTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
