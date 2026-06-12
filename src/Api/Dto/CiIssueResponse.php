<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiIssueResponse
 */
class CiIssueResponse extends SpatieData
{
    public function __construct(
        public CiIssue $data,
        public DocumentLinks $links,
    ) {}
}
