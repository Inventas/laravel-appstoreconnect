<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionKeyCreateRequestDataRelationshipsApp
 */
class AlternativeDistributionKeyCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AlternativeDistributionKeyCreateRequestDataRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
