<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclaration
 */
class AppEncryptionDeclaration extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEncryptionDeclarationAttributes|Optional $attributes = new Optional,
        public AppEncryptionDeclarationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
