<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationResponse
 */
class AppEncryptionDeclarationResponse extends SpatieData
{
    /**
     * @param  array<int, AppEncryptionDeclarationDocument|App|Build>|Optional  $included
     */
    public function __construct(
        public AppEncryptionDeclaration $data,
        public DocumentLinks $links,
        /** @var array<int, AppEncryptionDeclarationDocument|App|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
