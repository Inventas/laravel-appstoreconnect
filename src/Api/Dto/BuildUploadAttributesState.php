<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadAttributesState
 */
class BuildUploadAttributesState extends SpatieData
{
    /**
     * @param  array<int, StateDetail>|Optional  $errors
     * @param  array<int, StateDetail>|Optional  $warnings
     * @param  array<int, StateDetail>|Optional  $infos
     */
    public function __construct(
        /** @var array<int, StateDetail>|Optional */
        public array|Optional $errors = new Optional,
        /** @var array<int, StateDetail>|Optional */
        public array|Optional $warnings = new Optional,
        /** @var array<int, StateDetail>|Optional */
        public array|Optional $infos = new Optional,
        public BuildUploadState|Optional $state = new Optional,
    ) {}
}
