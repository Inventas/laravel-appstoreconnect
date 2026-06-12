<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentResponse
 */
class AppEncryptionDeclarationDocumentResponse extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationDocument $data,
        public DocumentLinks $links,
    ) {}
}
