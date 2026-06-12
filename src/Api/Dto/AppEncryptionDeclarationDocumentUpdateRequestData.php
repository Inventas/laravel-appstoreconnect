<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationDocumentUpdateRequestData
 */
class AppEncryptionDeclarationDocumentUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEncryptionDeclarationDocumentUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
