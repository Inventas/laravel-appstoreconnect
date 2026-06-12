<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentCreateRequestDataAttributes
 */
class AppEncryptionDeclarationDocumentCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
    ) {}
}
