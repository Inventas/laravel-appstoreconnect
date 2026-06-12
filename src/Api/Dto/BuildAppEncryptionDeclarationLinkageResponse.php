<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildAppEncryptionDeclarationLinkageResponse
 */
class BuildAppEncryptionDeclarationLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildAppEncryptionDeclarationLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
