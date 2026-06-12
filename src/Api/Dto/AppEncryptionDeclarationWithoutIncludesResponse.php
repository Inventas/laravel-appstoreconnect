<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationWithoutIncludesResponse
 */
class AppEncryptionDeclarationWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclaration $data,
        public DocumentLinks $links,
    ) {}
}
