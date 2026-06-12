<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationRelationships
 */
class AppEncryptionDeclarationRelationships extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationRelationshipsApp|Optional $app = new Optional,
        public AppEncryptionDeclarationRelationshipsBuilds|Optional $builds = new Optional,
        public AppEncryptionDeclarationRelationshipsAppEncryptionDeclarationDocument|Optional $appEncryptionDeclarationDocument = new Optional,
    ) {}
}
