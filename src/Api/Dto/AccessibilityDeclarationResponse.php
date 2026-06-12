<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AccessibilityDeclarationResponse
 */
class AccessibilityDeclarationResponse extends SpatieData
{
    public function __construct(
        public AccessibilityDeclaration $data,
        public DocumentLinks $links,
    ) {}
}
