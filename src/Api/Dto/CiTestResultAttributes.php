<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTestResultAttributes
 */
class CiTestResultAttributes extends SpatieData
{
    /**
     * @param  array<int, CiTestResultAttributesDestinationTestResultsItem>|Optional  $destinationTestResults
     */
    public function __construct(
        public string|Optional $className = new Optional,
        public string|Optional $name = new Optional,
        public CiTestStatus|Optional $status = new Optional,
        public FileLocation|Optional $fileSource = new Optional,
        public string|Optional $message = new Optional,
        /** @var array<int, CiTestResultAttributesDestinationTestResultsItem>|Optional */
        public array|Optional $destinationTestResults = new Optional,
    ) {}
}
