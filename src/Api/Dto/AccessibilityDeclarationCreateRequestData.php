<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AccessibilityDeclarationCreateRequestData
 */
class AccessibilityDeclarationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AccessibilityDeclarationCreateRequestDataAttributes $attributes,
        public AccessibilityDeclarationCreateRequestDataRelationships $relationships,
    ) {}
}
