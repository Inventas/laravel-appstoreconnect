<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ErrorResponse
 */
class ErrorResponse extends SpatieData
{
    /**
     * @param  array<int, ErrorResponseErrorsItem>|Optional  $errors
     */
    public function __construct(
        /** @var array<int, ErrorResponseErrorsItem>|Optional */
        public array|Optional $errors = new Optional,
    ) {}
}
