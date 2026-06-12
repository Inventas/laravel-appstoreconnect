<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationCreateRequest
 */
class AppEncryptionDeclarationCreateRequest extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationCreateRequestData $data,
    ) {}
}
