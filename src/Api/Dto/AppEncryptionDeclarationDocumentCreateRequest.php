<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentCreateRequest
 */
class AppEncryptionDeclarationDocumentCreateRequest extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationDocumentCreateRequestData $data,
    ) {}
}
