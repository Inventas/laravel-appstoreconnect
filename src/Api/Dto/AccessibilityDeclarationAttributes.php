<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AccessibilityDeclarationAttributes
 */
class AccessibilityDeclarationAttributes extends SpatieData
{
    public function __construct(
        public DeviceFamily|Optional $deviceFamily = new Optional,
        public string|Optional $state = new Optional,
        public bool|Optional $supportsAudioDescriptions = new Optional,
        public bool|Optional $supportsCaptions = new Optional,
        public bool|Optional $supportsDarkInterface = new Optional,
        public bool|Optional $supportsDifferentiateWithoutColorAlone = new Optional,
        public bool|Optional $supportsLargerText = new Optional,
        public bool|Optional $supportsReducedMotion = new Optional,
        public bool|Optional $supportsSufficientContrast = new Optional,
        public bool|Optional $supportsVoiceControl = new Optional,
        public bool|Optional $supportsVoiceover = new Optional,
    ) {}
}
