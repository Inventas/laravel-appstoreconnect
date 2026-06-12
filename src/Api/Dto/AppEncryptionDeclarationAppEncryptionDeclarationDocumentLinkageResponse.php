<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationAppEncryptionDeclarationDocumentLinkageResponse
 */
class AppEncryptionDeclarationAppEncryptionDeclarationDocumentLinkageResponse extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationAppEncryptionDeclarationDocumentLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
