<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AccessibilityDeclarationUpdateRequest
 */
class AccessibilityDeclarationUpdateRequest extends SpatieData
{
    public function __construct(
        public AccessibilityDeclarationUpdateRequestData $data,
    ) {}
}
