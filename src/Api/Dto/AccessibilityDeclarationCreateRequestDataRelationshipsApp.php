<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AccessibilityDeclarationCreateRequestDataRelationshipsApp
 */
class AccessibilityDeclarationCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AccessibilityDeclarationCreateRequestDataRelationshipsAppData $data,
    ) {}
}
