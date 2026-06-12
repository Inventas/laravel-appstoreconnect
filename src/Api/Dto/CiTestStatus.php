<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * CiTestStatus
 */
enum CiTestStatus: string
{
    case SUCCESS = 'SUCCESS';
    case FAILURE = 'FAILURE';
    case MIXED = 'MIXED';
    case SKIPPED = 'SKIPPED';
    case EXPECTED_FAILURE = 'EXPECTED_FAILURE';
}
