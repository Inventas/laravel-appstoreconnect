<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * CiCompletionStatus
 */
enum CiCompletionStatus: string
{
    case SUCCEEDED = 'SUCCEEDED';
    case FAILED = 'FAILED';
    case ERRORED = 'ERRORED';
    case CANCELED = 'CANCELED';
    case SKIPPED = 'SKIPPED';
}
