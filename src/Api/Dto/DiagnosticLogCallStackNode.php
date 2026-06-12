<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogCallStackNode
 */
class DiagnosticLogCallStackNode extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogCallStackNode>|Optional  $subFrames
     */
    public function __construct(
        public int|Optional $sampleCount = new Optional,
        public bool|Optional $isBlameFrame = new Optional,
        public string|Optional $symbolName = new Optional,
        public string|Optional $insightsCategory = new Optional,
        public string|Optional $offsetIntoSymbol = new Optional,
        public string|Optional $binaryName = new Optional,
        public string|Optional $fileName = new Optional,
        #[MapName('binaryUUID')]
        public string|Optional $binaryUuid = new Optional,
        public string|Optional $lineNumber = new Optional,
        public string|Optional $address = new Optional,
        public string|Optional $offsetIntoBinaryTextSegment = new Optional,
        public string|Optional $rawFrame = new Optional,
        /** @var array<int, DiagnosticLogCallStackNode>|Optional */
        public array|Optional $subFrames = new Optional,
    ) {}
}
