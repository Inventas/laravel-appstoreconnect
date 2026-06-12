<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationAppEncryptionDeclarationDocumentLinkageResponseData
 */
class AppEncryptionDeclarationAppEncryptionDeclarationDocumentLinkageResponseData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
