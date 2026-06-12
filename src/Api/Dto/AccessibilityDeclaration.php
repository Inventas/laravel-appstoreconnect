<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AccessibilityDeclaration
 */
class AccessibilityDeclaration extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AccessibilityDeclarationAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
