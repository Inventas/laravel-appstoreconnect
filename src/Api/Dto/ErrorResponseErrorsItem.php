<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ErrorResponseErrorsItem
 */
class ErrorResponseErrorsItem extends SpatieData
{
    /**
     * @param  array<string, mixed>|Optional  $meta
     */
    public function __construct(
        public string $status,
        public string $code,
        public string $title,
        public string $detail,
        public string|Optional $id = new Optional,
        public ErrorSourcePointer|ErrorSourceParameter|Optional $source = new Optional,
        public ErrorLinks|Optional $links = new Optional,
        /** @var array<string, mixed>|Optional */
        public array|Optional $meta = new Optional,
    ) {}
}
