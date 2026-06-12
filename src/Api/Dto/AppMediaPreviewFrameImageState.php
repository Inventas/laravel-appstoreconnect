<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppMediaPreviewFrameImageState
 */
class AppMediaPreviewFrameImageState extends SpatieData
{
    /**
     * @param  array<int, AppMediaStateError>|Optional  $errors
     * @param  array<int, AppMediaStateError>|Optional  $warnings
     */
    public function __construct(
        /** @var array<int, AppMediaStateError>|Optional */
        public array|Optional $errors = new Optional,
        /** @var array<int, AppMediaStateError>|Optional */
        public array|Optional $warnings = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
