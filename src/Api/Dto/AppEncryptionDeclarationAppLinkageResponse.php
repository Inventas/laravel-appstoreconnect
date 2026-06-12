<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationAppLinkageResponse
 */
class AppEncryptionDeclarationAppLinkageResponse extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
