<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * CiGitRefKind
 */
enum CiGitRefKind: string
{
    case BRANCH = 'BRANCH';
    case TAG = 'TAG';
}
