<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UploadOperation
 */
class UploadOperation extends SpatieData
{
    /**
     * @param  array<int, HttpHeader>|Optional  $requestHeaders
     */
    public function __construct(
        public string|Optional $method = new Optional,
        public string|Optional $url = new Optional,
        public int|Optional $length = new Optional,
        public int|Optional $offset = new Optional,
        /** @var array<int, HttpHeader>|Optional */
        public array|Optional $requestHeaders = new Optional,
    ) {}
}
