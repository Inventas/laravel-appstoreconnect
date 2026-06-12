<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationAttributes
 */
class AppEncryptionDeclarationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $appDescription = new Optional,
        public string|Optional $createdDate = new Optional,
        public bool|Optional $usesEncryption = new Optional,
        public bool|Optional $exempt = new Optional,
        public bool|Optional $containsProprietaryCryptography = new Optional,
        public bool|Optional $containsThirdPartyCryptography = new Optional,
        public bool|Optional $availableOnFrenchStore = new Optional,
        public Platform|Optional $platform = new Optional,
        public string|Optional $uploadedDate = new Optional,
        public string|Optional $documentUrl = new Optional,
        public string|Optional $documentName = new Optional,
        public string|Optional $documentType = new Optional,
        public AppEncryptionDeclarationState|Optional $appEncryptionDeclarationState = new Optional,
        public string|Optional $codeValue = new Optional,
    ) {}
}
