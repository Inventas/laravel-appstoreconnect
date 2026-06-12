<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowResponse
 */
class CiWorkflowResponse extends SpatieData
{
    /**
     * @param  array<int, CiMacOsVersion|CiProduct|CiXcodeVersion|ScmRepository>|Optional  $included
     */
    public function __construct(
        public CiWorkflow $data,
        public DocumentLinks $links,
        /** @var array<int, CiMacOsVersion|CiProduct|CiXcodeVersion|ScmRepository>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
