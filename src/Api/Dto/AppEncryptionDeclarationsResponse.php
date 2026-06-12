<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationsResponse
 */
class AppEncryptionDeclarationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppEncryptionDeclaration>  $data
     * @param  array<int, AppEncryptionDeclarationDocument|App|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppEncryptionDeclaration> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppEncryptionDeclarationDocument|App|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
