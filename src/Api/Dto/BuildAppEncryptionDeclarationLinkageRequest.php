<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildAppEncryptionDeclarationLinkageRequest
 */
class BuildAppEncryptionDeclarationLinkageRequest extends SpatieData
{
    public function __construct(
        public BuildAppEncryptionDeclarationLinkageRequestData $data,
    ) {}
}
