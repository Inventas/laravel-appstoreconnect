<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiIssueAttributes
 */
class CiIssueAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $issueType = new Optional,
        public string|Optional $message = new Optional,
        public FileLocation|Optional $fileSource = new Optional,
        public string|Optional $category = new Optional,
    ) {}
}
