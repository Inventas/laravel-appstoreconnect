<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndUserLicenseAgreementCreateRequestDataRelationshipsTerritories
 */
class EndUserLicenseAgreementCreateRequestDataRelationshipsTerritories extends SpatieData
{
    /**
     * @param  array<int, EndUserLicenseAgreementCreateRequestDataRelationshipsTerritoriesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, EndUserLicenseAgreementCreateRequestDataRelationshipsTerritoriesDataItem> */
        public array $data,
    ) {}
}
