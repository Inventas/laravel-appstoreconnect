<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AccessibilityDeclarationCreateRequest
 */
class AccessibilityDeclarationCreateRequest extends SpatieData
{
    public function __construct(
        public AccessibilityDeclarationCreateRequestData $data,
    ) {}
}
