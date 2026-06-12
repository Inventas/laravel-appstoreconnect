<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationBuildsLinkagesRequest
 */
class AppEncryptionDeclarationBuildsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppEncryptionDeclarationBuildsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppEncryptionDeclarationBuildsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
