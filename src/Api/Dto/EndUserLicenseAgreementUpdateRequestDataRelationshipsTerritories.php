<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementUpdateRequestDataRelationshipsTerritories
 */
class EndUserLicenseAgreementUpdateRequestDataRelationshipsTerritories extends SpatieData
{
    /**
     * @param  array<int, EndUserLicenseAgreementUpdateRequestDataRelationshipsTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, EndUserLicenseAgreementUpdateRequestDataRelationshipsTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
