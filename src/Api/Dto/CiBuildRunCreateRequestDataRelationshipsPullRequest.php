<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestDataRelationshipsPullRequest
 */
class CiBuildRunCreateRequestDataRelationshipsPullRequest extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestDataRelationshipsPullRequestData|Optional $data = new Optional,
    ) {}
}
