<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AccessibilityDeclarationUpdateRequestDataAttributes
 */
class AccessibilityDeclarationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $publish = new Optional,
        public bool|Optional|null $supportsAudioDescriptions = new Optional,
        public bool|Optional|null $supportsCaptions = new Optional,
        public bool|Optional|null $supportsDarkInterface = new Optional,
        public bool|Optional|null $supportsDifferentiateWithoutColorAlone = new Optional,
        public bool|Optional|null $supportsLargerText = new Optional,
        public bool|Optional|null $supportsReducedMotion = new Optional,
        public bool|Optional|null $supportsSufficientContrast = new Optional,
        public bool|Optional|null $supportsVoiceControl = new Optional,
        public bool|Optional|null $supportsVoiceover = new Optional,
    ) {}
}
