<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProfileCreateRequestDataRelationshipsCertificates
 */
class ProfileCreateRequestDataRelationshipsCertificates extends SpatieData
{
    /**
     * @param  array<int, ProfileCreateRequestDataRelationshipsCertificatesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ProfileCreateRequestDataRelationshipsCertificatesDataItem> */
        public array $data,
    ) {}
}
