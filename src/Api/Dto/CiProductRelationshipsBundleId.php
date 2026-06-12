<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductRelationshipsBundleId
 */
class CiProductRelationshipsBundleId extends SpatieData
{
    public function __construct(
        public CiProductRelationshipsBundleIdData|Optional $data = new Optional,
    ) {}
}
