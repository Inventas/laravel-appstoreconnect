<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsPullRequest
 */
class CiBuildRunRelationshipsPullRequest extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsPullRequestData|Optional $data = new Optional,
    ) {}
}
