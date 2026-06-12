<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiTestResultResponse
 */
class CiTestResultResponse extends SpatieData
{
    public function __construct(
        public CiTestResult $data,
        public DocumentLinks $links,
    ) {}
}
